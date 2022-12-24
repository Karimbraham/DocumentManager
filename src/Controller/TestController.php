<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/send-request', name: 'app_send-request')]
    public function index()
    {   
        return $this->render("pages/mainpage.html.twig",["testVariable"=>"USER LOGIN"]);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/TestController.php',
        // ]);
    }

    #[Route('/requests', name: 'app_requests')]
    public function consult()
    {   
        return $this->render("pages/table.html.twig",["testVariable"=>"USER LOGIN"]);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/TestController.php',
        // ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login()
    {   
        return $this->render("pages/homepage.html.twig",["testVariable"=>"USER LOGIN"]);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/TestController.php',
        // ]);
    }
}
