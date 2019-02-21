<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    public function sendMailMessageAdmin($name, $message, $email)
    {
        $transport = (new \Swift_SmtpTransport('smtp.ionos.fr', 587, 'tls'))
            ->setUsername('contact@jef-dc.com')
            ->setPassword('claude05dusky09');

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
}