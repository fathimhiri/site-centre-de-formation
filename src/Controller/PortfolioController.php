<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function index2(): Response
    {
        return $this->render('portfolio/profile.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    /**
     * @Route("/mem", name="mem")
     */
    public function index4(): Response
    {
        return $this->render('portfolio/membership.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    /**
     * @Route("/err", name="err")
     */
    public function index3(): Response
    {
        return $this->render('portfolio/error-404.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
