<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FakebookController extends AbstractController
{
    /**
     * @Route("/fakebook", name="fakebook")
     */
    public function index()
    {
        return $this->render('fakebook/index.html.twig', [
            'controller_name' => 'FakebookController',
        ]);
    }
}
