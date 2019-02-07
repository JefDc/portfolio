<?php

namespace App\Controller;

use App\Entity\Intro;
use App\Form\IntroType;
use App\Repository\IntroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/intro")
 */
class IntroController extends AbstractController
{
    /**
     * @Route("/", name="intro_index", methods={"GET"})
     */
    public function index(IntroRepository $introRepository): Response
    {
        return $this->render('intro/base.html.twig', [
            'intros' => $introRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="intro_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $intro = new Intro();
        $form = $this->createForm(IntroType::class, $intro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($intro);
            $entityManager->flush();

            return $this->redirectToRoute('intro_index');
        }

        return $this->render('intro/new.html.twig', [
            'intro' => $intro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="intro_show", methods={"GET"})
     */
    public function show(Intro $intro): Response
    {
        return $this->render('intro/show.html.twig', [
            'intro' => $intro,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="intro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Intro $intro): Response
    {
        $form = $this->createForm(IntroType::class, $intro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('intro_index', [
                'id' => $intro->getId(),
            ]);
        }

        return $this->render('intro/edit.html.twig', [
            'intro' => $intro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="intro_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Intro $intro): Response
    {
        if ($this->isCsrfTokenValid('delete'.$intro->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($intro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('intro_index');
    }
}
