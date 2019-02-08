<?php

namespace App\Controller;

use App\Entity\SoftSkill;
use App\Form\SoftSkillType;
use App\Repository\SoftSkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/softskill")
 */
class SoftSkillController extends AbstractController
{
    /**
     * @Route("/", name="soft_skill_index", methods={"GET"})
     */
    public function index(SoftSkillRepository $softSkillRepository): Response
    {
        return $this->render('/admin/soft_skill/index.html.twig', [
            'soft_skills' => $softSkillRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="soft_skill_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $softSkill = new SoftSkill();
        $form = $this->createForm(SoftSkillType::class, $softSkill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($softSkill);
            $entityManager->flush();

            return $this->redirectToRoute('soft_skill_index');
        }

        return $this->render('/admin/soft_skill/new.html.twig', [
            'soft_skill' => $softSkill,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="soft_skill_show", methods={"GET"})
     */
    public function show(SoftSkill $softSkill): Response
    {
        return $this->render('/admin/soft_skill/show.html.twig', [
            'soft_skill' => $softSkill,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="soft_skill_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SoftSkill $softSkill): Response
    {
        $form = $this->createForm(SoftSkillType::class, $softSkill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('soft_skill_index', [
                'id' => $softSkill->getId(),
            ]);
        }

        return $this->render('/admin/soft_skill/_form.html.twig', [
            'soft_skill' => $softSkill,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="soft_skill_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SoftSkill $softSkill): Response
    {
        if ($this->isCsrfTokenValid('delete'.$softSkill->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($softSkill);
            $entityManager->flush();
        }

        return $this->redirectToRoute('soft_skill_index');
    }
}
