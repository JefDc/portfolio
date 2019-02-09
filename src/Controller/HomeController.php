<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\AboutUsRepository;
use App\Repository\ExtraRepository;
use App\Repository\IntroRepository;
use App\Repository\PortfolioRepository;
use App\Repository\SkillRepository;
use App\Repository\SoftSkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SkillRepository $skillRepository, IntroRepository $introRepository,
                          PortfolioRepository $portfolioRepository, AboutUsRepository $aboutUsRepository,
                          SoftSkillRepository $softSkillRepository, Request $request, ExtraRepository $extraRepository)
    {
        // Send message
        $message = new Contact();
        $form = $this->createForm(ContactType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            // Reinit form for redirection
            $message = new Contact();
            $form = $this->createForm( ContactType::class, $message);

            $this->addFlash('success', 'Votre message a bien était envoyé. Je prendrai contact avec vous au plus tôt. Merci. ');

            return $this->redirectToRoute('home', ['_fragment' => 'contact']);
        }



        return $this->render('home/index.html.twig', [
            'skills' => $skillRepository->findAll(),
            'intros' => $introRepository->findAll(),
            'portfolios' => $portfolioRepository->findAll(),
            'intro' => $aboutUsRepository->findAll(),
            'soft_skills' => $softSkillRepository->findAll(),
            'form' => $form->createView(),
            'extras' => $extraRepository->findAll()
        ]);
    }
}
