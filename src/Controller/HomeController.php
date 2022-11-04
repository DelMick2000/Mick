<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $user = ['name' => 'Léonid'];

   return $this->render('home/accueil.html.twig', [
    'controller_name' => 'HomeController',
    'user' => $user,
    'tab' => ['truc' => 234 , 'machin' => 45]
            ]
        );
    }
}