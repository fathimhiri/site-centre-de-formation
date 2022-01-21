<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

/**
     * @Route("/admin/dash", name="admindash")
     */
    public function dashb(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/addL", name="adminaddL")
     */
    public function addL(): Response
    {
        return $this->render('admin/add-listing.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/basicC", name="adminbasicC")
     */
    public function basicC(): Response
    {
        return $this->render('admin/basic-calendar.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/bookm", name="adminbookm")
     */
    public function bookm(): Response
    {
        return $this->render('admin/bookmark.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/courses", name="admincourses")
     */
    public function courses(): Response
    {
        return $this->render('admin/courses.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    



    /**
     * @Route("/admin/rev", name="adminrev")
     */
    public function rev(): Response
    {
        return $this->render('admin/review.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/list", name="adminlist")
     */
    public function listv(): Response
    {
        return $this->render('admin/list-view.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
     /**
     * @Route("/admin/mailc", name="adminmailc")
     */
    public function mailc(): Response
    {
        return $this->render('admin/mailbox-compose.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/mailread", name="adminmailread")
     */
    public function mailr(): Response
    {
        return $this->render('admin/mailbox-read.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

     /**
     * @Route("/admin/mail", name="adminmail")
     */
    public function mail(): Response
    {
        return $this->render('admin/mailbox.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
     /**
     * @Route("/admin/teach", name="adminteach")
     */
    public function teacher(): Response
    {
        return $this->render('admin/teacher-profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/user", name="adminuser")
     */
    public function user(): Response
    {
        return $this->render('admin/user-profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
