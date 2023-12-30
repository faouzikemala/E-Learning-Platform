<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class A404Controller extends AbstractController
{
    #[Route('/a404', name: 'app_a404')]
    public function index(): Response
    {
        return $this->render('a404/index.html.twig', [
            'controller_name' => 'A404Controller',
        ]);
    }
}
