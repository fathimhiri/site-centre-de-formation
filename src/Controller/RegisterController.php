<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{

   

    /**
     * @Route("/register", name="register")
     */
    public function index(Request $request)
    {

      

        return $this->render('register/register.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }






    

    


}
