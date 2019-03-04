<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Extra;
use App\Entity\MailAdminSetting;
use App\Entity\MailContentUser;
use App\Entity\MailSetting;
use App\Entity\MailUserSetting;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MailController extends AbstractController
{

    public function transport()
    {
        $mailSettingRepository = $this->getDoctrine()->getRepository(MailSetting::class);
        $mailSetting = $mailSettingRepository->findOneBy(['id' => 1]);
        $host = $mailSetting->getHost();
        $port = $mailSetting->getPort();
        $encryption = $mailSetting->getEncryption();
        $username = $mailSetting->getUsername();
        $password = $mailSetting->getPassword();

        $transport = (new \Swift_SmtpTransport($host, $port, $encryption))
            ->setUsername($username)
            ->setPassword($password);

        return $mailer = new \Swift_Mailer($transport);
    }

    public function sendMailMessageAdmin($name, $message, $email)
    {
        $mailAdminSettingRepository = $this->getDoctrine()->getRepository(MailAdminSetting::class);
        $mailAdminSetting = $mailAdminSettingRepository->findOneBy(['id' => 1]);
        $subjet = $mailAdminSetting->getObject();
        $mailSend = $mailAdminSetting->getMailSend();
        $domaine = $mailAdminSetting->getDomaine();
        $mailReception = $mailAdminSetting->getMailReception();
        $nameAdmin = $mailAdminSetting->getNameAdmin();

        $mailer = $this->transport();
        $mail = (new \Swift_Message($subjet))
            ->setFrom([$mailSend => $domaine])
            ->setTo([$mailReception => $nameAdmin])
            ->setCharset('UTF-8')
            ->setContentType('text/html')
            ->setBody(
                $this->renderView('admin/mail/mailAdmin.html.twig',
                    [
                        'name' => $name,
                        'message' => $message,
                        'email' => $email
                    ]
                )
            );
        $mailer->send($mail);
    }

    public function sendMailUser($name, $email)
    {
        // recover mailUserSetting
        $mailUserSettingRepository = $this->getDoctrine()->getRepository(MailUserSetting::class);
        $mailUserSetting = $mailUserSettingRepository->findOneBy(['id' => 1]);
        $subject = $mailUserSetting->getSubject();
        $mailSend = $mailUserSetting->getMailSend();
        $domaine = $mailUserSetting->getDomaine();

        // recover mailContentUser
        $mailContentUserRepository = $this->getDoctrine()->getRepository(MailContentUser::class);
        $mailContentUser = $mailContentUserRepository->findOneBy(['id' => 1]);
        $title = $mailContentUser->getTitle();
        $content = $mailContentUser->getContent();
        $img = $mailContentUser->getImg();
        $link = $mailContentUser->getLink();

        // recover contact info
        $contactRepository = $this->getDoctrine()->getRepository(Contact::class);
        $contact = $contactRepository->findOneBy(['id' => 1]);
        $emailAdmin = $contact->getEmail();
        $phone = $contact->getPhone();

        // recover link footer
        $extraRepository = $this->getDoctrine()->getRepository(Extra::class);
        $extra = $extraRepository->findOneBy(['id' => 1]);
        $linkedin = $extra->getLinkedin();
        $github = $extra->getGithub();
        $twitter = $extra->getTwitter();

        $mailer = $this->transport();
        $mail = (new \Swift_Message($subject))
            ->setFrom([$mailSend => $domaine])
            ->setTo([$email => $name])
            ->setCharset('UTF-8')
            ->setContentType('text/html')
            ->setBody(
             $this->renderView('admin/mail/mailUser.html.twig',
                 [
                     'name' => $name,
                     'title' => $title,
                     'content' => $content,
                     'img' => $img,
                     'link' => $link,
                     'email' => $emailAdmin,
                     'phone' => $phone,
                     'linkedin' => $linkedin,
                     'github' => $github,
                     'twitter' => $twitter
                 ]
             )
         );
        $mailer->send($mail);
    }

    /**
     * @Route("/mail", name="test_mail")
     */
    public function mailTest()
    {

        $contactRepository = $this->getDoctrine()->getRepository(Contact::class);
        $contact = $contactRepository->findOneBy(['id' => 1]);
        dd($contact);
        return $this->render('/admin/mail/mailUser.html.twig', [
           'name' => 'Jef Dc',
           'message' => "Yo yo yo !",
           'email' => 'vival@teck.no',
            'link' => 'jef-dc.com',
            'img' => 1,
            'content' => 'yo',
            'title' => 'Vous avez un nouveau message'
        ]);
    }
}