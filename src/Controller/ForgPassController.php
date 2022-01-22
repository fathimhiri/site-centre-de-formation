<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForgPassController extends AbstractController
{
    /**
     * @Route("/forg/pass", name="forg_pass")
     */
    public function index(): Response
    {
        return $this->render('forg_pass/forg_pass.html.twig', [
            'controller_name' => 'ForgPassController',
        ]);
    }
}
