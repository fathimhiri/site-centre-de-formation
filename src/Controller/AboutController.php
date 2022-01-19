<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about-1", name="about1" ,methods={"GET"})
     */
    public function index1(): Response
    {
        return $this->render('about/about-1.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }

    /**
     * @Route("/about-2", name="about2")
     */
    public function index2(): Response
    {
        return $this->render('about/about-2.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
