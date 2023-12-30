<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IntegrationsController extends AbstractController
{
    #[Route('/integrations', name: 'app_integrations')]
    public function index(): Response
    {
        return $this->render('integrations/index.html.twig', [
            'controller_name' => 'IntegrationsController',
        ]);
    }
}
