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
     * @Route("/", name="intro_index", methods={"GET","POST"})
     */
    public function index(IntroRepository $introRepository): Response
    {

        return $this->render('admin/intro/index.html.twig', [
            'intros' => $introRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="intro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Intro $intro): Response
    {
        $oldImg = $intro->getImg();
        $form = $this->createForm(IntroType::class, $intro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $file = $intro->getImg();
//            $data->setImg($file);
            if ($form->getData()->getImg() != null) {
                $fileName = md5(uniqid()) . '-intro.' . $file->guessExtension();
                $file->move($this->getParameter('upload_intro_directory'), $fileName);
                $data->setImg($fileName);
            } else{
                $intro->setImg($oldImg);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('intro_index', [
                'id' => $intro->getId(),
            ]);
        }

        return $this->render('admin/intro/_form.html.twig', [
            'intro' => $intro,
            'form' => $form->createView(),
        ]);
    }
}
