<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/admin//contact")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact_index", methods={"GET"})
     */
    public function index(ContactRepository $contactRepository): Response
    {
        return $this->render('/admin/contact/index.html.twig', [
            'contacts' => $contactRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contact_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Contact $contact): Response
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $contact->getImg();
            $fileName = md5(uniqid()). '-contact.' .$file->guessExtension();
            $file->move($this->getParameter('upload_contact_directory'), $fileName);
            $contact->setImg($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contact_index', [
                'id' => $contact->getId(),
            ]);
        }

        return $this->render('/admin/contact/_form.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

}
