<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForgottenPasswordController extends AbstractController
{
    #[Route('/forgotten/password', name: 'app_forgotten_password')]
    public function index(): Response
    {
        return $this->render('forgotten_password/index.html.twig', [
            'controller_name' => 'ForgottenPasswordController',
        ]);
    }
}
