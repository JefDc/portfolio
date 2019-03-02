<?php

namespace App\Controller;

use App\Entity\MailSetting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class MailController extends AbstractController
{

    public function transport()
    {
        $mailSettingRepository = $this->getDoctrine()->getRepository(MailSetting::class);
        $mailSetting = $mailSettingRepository->findOneBy(array('id' => 1));
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
        $mailer = $this->transport();
        $mail = (new \Swift_Message('Vous avez un nouveau message'))
            ->setFrom(['contact@jef-dc.com' => 'jef-dc.com'])
            ->setTo(['de.conti.jf@gmail.com' => 'Jef Dc'])
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