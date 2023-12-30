<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeaturesController extends AbstractController
{
    #[Route('/features', name: 'app_features')]
    public function index(): Response
    {
        return $this->render('features/index.html.twig', [
            'controller_name' => 'FeaturesController',
        ]);
    }
}
