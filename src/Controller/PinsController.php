<?php

namespace App\Controller;

use App\Repository\PinsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(PinsRepository $pinsRepository): Response
    {
        $pine = $pinsRepository->findAll();
        return $this->render('pins/index.html.twig' , compact('pine'));
    }
}
