<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact1")
     */
    public function index(): Response
    {
        return $this->render('contact/contact-1.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }




    /**
     * @Route("/contact2", name="contact2")
     */
    public function index2(): Response
    {
        return $this->render('contact/contact-2.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
