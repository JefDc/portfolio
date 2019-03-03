<?php

namespace App\Controller;

use App\Entity\MailAdminSetting;
use App\Entity\MailSetting;
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

//    /**
//     * @param $name
//     * @param $message
//     * @param $email
//     * @Route("/test")
//     */
//    public function test()
//    {
//        $tests = $this->getDoctrine()->getRepository(MailAdminSetting::class);
//        $test = $tests->findOneBy(['id' => 1]);
//        $object = $test->getObject();
//        dd($object);
//    }

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
        $mailer = $this->transport();
        $mail = (new \Swift_Message('Merci de votre intérêt'))
            ->setFrom(['contact@jef-dc.com' => 'jef-dc.com'])
            ->setTo([$email => $name])
            ->setCharset('UTF-8')
            ->setContentType('text/html')
            ->setBody(
             $this->renderView('admin/mail/mailUser.html.twig',
                 [
                     'name' => $name
                 ]
             )
         );
        $mailer->send($mail);
    }
}