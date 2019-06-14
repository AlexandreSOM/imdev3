<?php

namespace App\Controller;

use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function ListeComptes()
    {
        $repository = $this->getDoctrine()->getRepository(Compte::class);
        $comptes=$repository->findAll();
        return $this->render('home/index.html.twig', [
            'comptes' => $comptes
        ]);
    }
}
