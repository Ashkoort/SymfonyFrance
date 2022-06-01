<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MoyenAge;

class HistoireController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(MoyenAge::class);
        $MoyenAge = $repo->findOneById(11);
        return $this->render('histoire/index.html.twig', [
            'controller_name' => 'HistoireController',
            'MoyenAge' => $MoyenAge,
        ]);
    }

    /**
     * @Route("/histoire/{id}", name="MoyenAge")
     */
    public function home($id)
    {
        $repo = $this->getDoctrine()->getRepository(MoyenAge::class);
        $MoyenAge = $repo->findOneById(11);
        return $this->render('histoire/home.html.twig', [
            'MoyenAge' => $MoyenAge,
        ]);
    }
}
