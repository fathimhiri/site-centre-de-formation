<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/blog-classic-grid.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blogcs", name="blogcs")
     */
    public function index2(): Response
    {
        return $this->render('blog/blog-classic-sidebar.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blogd", name="blogd")
     */
    public function index3(): Response
    {
        return $this->render('blog/blog-details.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blogl", name="blogl")
     */
    public function index4(): Response
    {
        return $this->render('blog/blog-list-sidebar.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blogst", name="blogst")
     */
    public function index5(): Response
    {
        return $this->render('blog/blog-standard-sidebar.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
