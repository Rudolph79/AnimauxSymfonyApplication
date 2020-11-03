<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="personnes")
     */
    public function index(PersonneRepository $repository)
    {
        $personnes = $repository->findAll();
        return $this->render('personne/index.html.twig', [
            "personnes" => $personnes,
        ]);
    }

    /**
     * @Route("/personnes/{id}", name="show_personne")
     */
    public function showPersonne(Personne $personne)
    {
        return $this->render('personne/show_personne.html.twig', [
            "personne" => $personne
        ]);
    }
}
