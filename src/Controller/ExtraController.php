<?php

namespace App\Controller;

use App\Entity\Extra;
use App\Entity\MailSetting;
use App\Entity\User;
use App\Form\ExtraType;
use App\Form\MailSettingType;
use App\Form\UserType;
use App\Repository\ExtraRepository;
use App\Repository\MailSettingRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/extra")
 */
class ExtraController extends AbstractController
{
    /**
     * @Route("/", name="extra_index", methods={"GET"})
     */
    public function index(ExtraRepository $extraRepository): Response
    {
        return $this->render('/admin/extra/site/index.html.twig', [
            'extras' => $extraRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="extra_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Extra $extra): Response
    {
        $form = $this->createForm(ExtraType::class, $extra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_index', [
                'id' => $extra->getId()
            ]);
        }

        return $this->render('/admin/extra/site/_form.html.twig', [
            'extra' => $extra,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mail", name="extra_mail")
     */
    public function indexMail(MailSettingRepository $mailSettingRepository)
    {
        return $this->render('/admin/extra/mail/index.html.twig', [
            'mailSettings' => $mailSettingRepository->findAll()
        ]);
    }

    /**
     * @Route("/mail/{id}/edit", name="extra_mail_edit", methods={"GET", "POST"})
     */
    public function mailEdit(Request $request, MailSetting $mailSetting)
    {
        $form = $this->createForm(MailSettingType::class, $mailSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail', [
                'id' => $mailSetting->getId()
            ]);
        }

        return $this->render('/admin/extra/mail/_form.html.twig', [
           'mailSetting' => $mailSetting,
           'form' => $form->createView()
        ]);
    }
}
