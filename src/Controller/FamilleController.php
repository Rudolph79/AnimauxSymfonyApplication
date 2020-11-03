<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            "familles" => $familles
        ]);
    }

    /**
     * @Route("/familles/{id}", name="show_family")
     */
    public function showFamily(Famille $famille)
    {
        return $this->render('famille/show_family.html.twig', [
            "famille" => $famille
        ]);
    }
}
