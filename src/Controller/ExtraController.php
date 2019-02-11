<?php

namespace App\Controller;

use App\Entity\Extra;
use App\Form\ExtraType;
use App\Repository\ExtraRepository;
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
        return $this->render('/admin/extra/index.html.twig', [
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
            $file = $extra->getImgContact();
            $fileName = md5(uniqid()). '-contact.' .$file->guessExtension();
            $file->move($this->getParameter('upload_contact_directory'), $fileName);
            $extra->setImgContact($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extra_index', [
                'id' => $extra->getId(),
            ]);
        }

        return $this->render('/admin/extra/_form.html.twig', [
            'extra' => $extra,
            'form' => $form->createView(),
        ]);
    }

}
