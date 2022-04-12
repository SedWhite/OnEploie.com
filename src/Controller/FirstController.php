<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/random', name: 'app_random')]
    public function index(): Response
    {
        return $this->render('random.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
}
