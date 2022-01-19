<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index(): Response
    {
        return $this->render('event/event.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }


    /**
     * @Route("/eventDetails", name="eventdetails")
     */
    public function indexDet(): Response
    {
        return $this->render('event/events-details.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
