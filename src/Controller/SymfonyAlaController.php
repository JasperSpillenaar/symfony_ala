<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SymfonyAlaController extends AbstractController
{
    /**
     * @Route("/symfony/ala", name="symfony_ala")
     */
    public function index()
    {
        return $this->render('symfony_ala/index.html.twig', [
            'controller_name' => 'SymfonyAlaController',
        ]);
    }
}
