<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repository)
    {
        $continents = $repository->findAll();
        return $this->render('continent/index.html.twig', [
            "continents" => $continents
        ]);
    }

    /**
     * @Route("/continents/{id}", name="show_continent")
     */
    public function showContinent(Continent  $continent)
    {
        return $this->render('continent/show_continent.html.twig', [
            "continent" => $continent
        ]);
    }
}
