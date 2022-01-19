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
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeeController',
        ]);
    }


    /**
     * @Route("/home2", name="home2")
     */
    public function index2(): Response
    {
        return $this->render('home/index-2.html.twig', [
            'controller_name' => 'HomeeController',
        ]);
    }
}
