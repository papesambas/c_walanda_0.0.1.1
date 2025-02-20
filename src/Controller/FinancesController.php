<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FinancesController extends AbstractController
{
    #[Route('/finances', name: 'app_finances')]
    public function index(): Response
    {
        return $this->render('finances/index.html.twig', [
            'controller_name' => 'FinancesController',
        ]);
    }
}
