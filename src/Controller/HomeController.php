<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home1", name="home1")
     */
    public function index(): Response
    {
        return $this->render('home/home1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/home2", name="home2")
     */
    public function index2(): Response
    {
        return $this->render('home/home-2.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
