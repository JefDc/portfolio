<?php

namespace App\Controller;

use App\Entity\AboutUs;
use App\Form\AboutUsType;
use App\Repository\AboutUsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/about")
 */
class AboutUsController extends AbstractController
{
    /**
     * @Route("/", name="about_us_index", methods={"GET"})
     */
    public function index(AboutUsRepository $aboutUsRepository): Response
    {
        return $this->render('/admin/about_us/index.html.twig', [
            'aboutuses' => $aboutUsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="about_us_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AboutUs $aboutU): Response
    {
        $form = $this->createForm(AboutUsType::class, $aboutU);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $aboutU->getCv();
            $fileName = 'cv De CONTI.' .$file->guessExtension();
            $file->move($this->getParameter('upload_cv_directory'), $fileName);
            $aboutU->setCv($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('about_us_index', [
                'id' => $aboutU->getId(),
            ]);
        }

        return $this->render('/admin/about_us/_form.html.twig', [
            'about_u' => $aboutU,
            'form' => $form->createView(),
        ]);
    }

}
