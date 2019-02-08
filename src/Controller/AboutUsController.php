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
     * @Route("/new", name="about_us_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $aboutU = new AboutUs();
        $form = $this->createForm(AboutUsType::class, $aboutU);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aboutU);
            $entityManager->flush();

            return $this->redirectToRoute('about_us_index');
        }

        return $this->render('/admin/about_us/new.html.twig', [
            'about_u' => $aboutU,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="about_us_show", methods={"GET"})
     */
    public function show(AboutUs $aboutU): Response
    {
        return $this->render('/admin/about_us/show.html.twig', [
            'about_u' => $aboutU,
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

    /**
     * @Route("/{id}", name="about_us_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AboutUs $aboutU): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aboutU->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($aboutU);
            $entityManager->flush();
        }

        return $this->redirectToRoute('about_us_index');
    }
}
