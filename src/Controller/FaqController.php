<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends AbstractController
{
    /**
     * @Route("/faq1", name="faq1")
     */
    public function index(): Response
    {
        return $this->render('faq/faq-1.html.twig', [
            'controller_name' => 'FaqController',
        ]);
    }

    /**
     * @Route("/faq2", name="faq2")
     */
    public function index2(): Response
    {
        return $this->render('faq/faq-2.html.twig', [
            'controller_name' => 'FaqController',
        ]);
    }
}
