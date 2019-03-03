<?php

namespace App\Controller;

use App\Entity\MailAdminSetting;
use App\Entity\MailContentUser;
use App\Entity\MailSetting;
use App\Entity\MailUserSetting;
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
        $mailUserSettingRepository = $this->getDoctrine()->getRepository(MailUserSetting::class);
        $mailUserSetting = $mailUserSettingRepository->findOneBy(['id' => 1]);
        $subject = $mailUserSetting->getSubject();
        $mailSend = $mailUserSetting->getMailSend();
        $domaine = $mailUserSetting->getDomaine();

        $mailContentUserRepository = $this->getDoctrine()->getRepository(MailContentUser::class);
        $mailContentUser = $mailContentUserRepository->findOneBy(['id' => 1]);
        $title = $mailContentUser->getTitle();
        $content = $mailContentUser->getContent();
        $img = $mailContentUser->getImg();
        $link = $mailContentUser->getLink();

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
                     'link' => $link
                 ]
             )
         );
        $mailer->send($mail);
    }
}