<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Homepage with welcome message
     *
     * @Route("/", methods={"GET"}, name="homepage")
     */
    public function index()
    {
        return $this->render('home/homepage.html.twig', [

        ]);
    }
}
