<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin_dashboard")
     */
    public function index(MessageRepository $messageRepository)
    {

        return $this->render('admin/dashboard/index.html.twig', [
            'messages' => $messageRepository->findBy([], ['id' => 'DESC'])

        ]);
    }
}
