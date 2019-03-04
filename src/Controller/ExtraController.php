<?php

namespace App\Controller;

use App\Entity\Extra;
use App\Entity\MailAdminSetting;
use App\Entity\MailContentAdmin;
use App\Entity\MailContentUser;
use App\Entity\MailSetting;
use App\Entity\MailUserSetting;
use App\Entity\User;
use App\Form\ExtraType;
use App\Form\MailAdminSettingType;
use App\Form\MailContentAdminType;
use App\Form\MailContentUserType;
use App\Form\MailSettingType;
use App\Form\MailUserSettingType;
use App\Form\UserType;
use App\Repository\ExtraRepository;
use App\Repository\MailAdminSettingRepository;
use App\Repository\MailContentAdminRepository;
use App\Repository\MailContentUserRepository;
use App\Repository\MailSettingRepository;
use App\Repository\MailUserSettingRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
            'extras' => $extraRepository->findAll()
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
     * @Route("/mail/setting", name="extra_mail_setting")
     */
    public function indexMailSetting(MailSettingRepository $mailSettingRepository, MailAdminSettingRepository $mailAdminSettingRepository,
                              MailUserSettingRepository $mailUserSettingRepository)
    {
        return $this->render('/admin/extra/mail/index.html.twig', [
            'mailSettings' => $mailSettingRepository->findAll(),
            'mailAdminSettings' => $mailAdminSettingRepository->findAll(),
            'mailUserSettings' => $mailUserSettingRepository->findAll()
        ]);
    }

    /**
     * @Route("/mail/setting/{id}/edit", name="extra_mailSetting_edit", methods={"GET", "POST"})
     */
    public function mailSettingEdit(Request $request, MailSetting $mailSetting)
    {
        $form = $this->createForm(MailSettingType::class, $mailSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail', [
                'id' => $mailSetting->getId()
            ]);
        }

        return $this->render('/admin/extra/mail/_formSetting.html.twig', [
           'mailSetting' => $mailSetting,
           'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mail/setting/{id}/admin/edit", name="extra_mailAdmin_edit", methods={"GET", "POST"})
     */
    public function mailAdminSettingEdit(Request $request, MailAdminSetting $mailAdminSetting)
    {
        $form = $this->createForm(MailAdminSettingType::class, $mailAdminSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail', [
                'id' => $mailAdminSetting->getId()
            ]);
        }

        return $this->render('/admin/extra/mail/_formMailAdminSetting.html.twig', [
            'mailAdminSetting' => $mailAdminSetting,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mail/setting/{id}/user/edit", name="extra_mailUser_edit", methods={"GET", "POST"})
     */
    public function mailUserSettingEdit(Request $request, MailUserSetting $mailUserSetting)
    {
        $form = $this->createForm(MailUserSettingType::class, $mailUserSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail', [
                'id' => $mailUserSetting->getId()
            ]);
        }

        return $this->render('/admin/extra/mail/_formMailUserSetting.html.twig', [
            'mailUserSetting' => $mailUserSetting,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mail/contents", name="extra_mail_contents", methods={"GET", "POST"})
     */
    public function indexMailContents(MailContentUserRepository $mailContentUserRepository, MailContentAdminRepository $mailContentAdminRepository)
    {
        return $this->render('/admin/extra/mailContent/index.html.twig', [
           'mailContents' => $mailContentUserRepository->findAll(),
           'mailContentAdmins' => $mailContentAdminRepository->findAll()
        ]);
    }

    /**
     * @Route("/mail/content/{id}/user/edit", name="extra_mail_content_user_edit", methods={"GET", "POST"})
     */
    public function mailContentUserEdit(Request $request, MailContentUser $mailContentUser)
    {
        $form = $this->createForm(MailContentUserType::class, $mailContentUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $mailContentUser->getImg();
            $filename = md5(uniqid()). '-img' . '.' . $file->guessExtension();
            $file->move($this->getParameter('upload_email_directory'), $filename);
            $mailContentUser->setImg($filename);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail_contents', [
                'id' => $mailContentUser->getId()
            ]);
        }

        return $this->render('/admin/extra/mailContent/_formContentUser.html.twig', [
           'mailContentUser' => $mailContentUser,
           'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/mail/content/{id}/admin/edit", name="extra_mail_content_admin_edit", methods={"GET", "POST"})
     */
    public function mailContentAdminEdit(Request $request, MailContentAdmin $mailContentAdmin)
    {
        $form = $this->createForm(MailContentAdminType::class, $mailContentAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_mail_contents', [
                'id' => $mailContentAdmin,
            ]);
        }

        return $this->render('/admin/extra/mailContent/_formContentAdmin.html.twig', [
            'mailContentAdmins' => $mailContentAdmin,
            'form' => $form->createView()
        ]);
    }
}
