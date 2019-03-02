<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    public function sendMailMessageAdmin($name, $message, $email)
    {
        $transport = (new \Swift_SmtpTransport('smtp.ionos.fr', 587, 'tls'))
            ->setUsername('contact@jef-dc.com')
            ->setPassword('mAc&BellaDc81');

        $mailer = new \Swift_Mailer($transport);

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
        $tranport = (new \Swift_SmtpTransport('smtp.ionos.fr', 587, 'tls'))
            ->setUsername('contact@jef-dc.com')
            ->setPassword('mAc&BellaDc81');

        $mailer = new \Swift_Mailer($tranport);

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