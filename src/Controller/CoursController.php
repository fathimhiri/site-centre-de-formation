<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="courses")
     */
    public function index(): Response
    {
        return $this->render('cours/courses.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

     /**
     * @Route("/coursde", name="coursde")
     */
    public function index2(): Response
    {
        return $this->render('cours/courses-details.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    

}
