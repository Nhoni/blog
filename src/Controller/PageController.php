<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    
    /**
     *Ici on créer une nouvelle route pour la page blog
     * On a bessoin de creer une nouvelle vue page/blog.html.twig
     */
    #[Route('/blog', name: 'app_blog',methods:['GET', 'POST'])]
    public function blog(): Response
    {
        return $this->render('page/blog.html.twig', [
            'title' => 'Tous les articles du blog', //Variable
        ]);
    }
}
