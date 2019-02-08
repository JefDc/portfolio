<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/skill")
 */
class SkillController extends AbstractController
{
    /**
     * @Route("/", name="skill_index", methods={"GET"})
     */
    public function index(SkillRepository $skillRepository): Response
    {
        return $this->render('/admin/skill/index.html.twig', [
            'skills' => $skillRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="skill_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $skill->getImg();
            $fileName = md5(uniqid()). '-skill.' .$file->guessExtension();
            $file->move($this->getParameter('upload_skill_directory'), $fileName);
            $skill->setImg($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($skill);
            $entityManager->flush();

            return $this->redirectToRoute('skill_index');
        }

        return $this->render('/admin/skill/new.html.twig', [
            'skill' => $skill,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="skill_show", methods={"GET"})
     */
    public function show(Skill $skill): Response
    {
        return $this->render('/admin/skill/show.html.twig', [
            'skill' => $skill,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="skill_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Skill $skill): Response
    {
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $skill->getImg();
            $fileName = md5(uniqid()). 'skill.' .$file->guessExtension();
            $file->move($this->getParameter('uplaod_skill_directory'), $fileName);
            $skill->setImg($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('skill_index', [
                'id' => $skill->getId(),
            ]);
        }

        return $this->render('/admin/skill/_form.html.twig', [
            'skill' => $skill,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="skill_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Skill $skill): Response
    {
        if ($this->isCsrfTokenValid('delete'.$skill->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($skill);
            $entityManager->flush();
        }

        return $this->redirectToRoute('skill_index');
    }
}
