<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        $animals = $repository->findAll();
        return $this->render('animal/index.html.twig', compact("animals"));
    }

    /**
     * @Route("/animal/{id}", name="show_animal")
     */
    public function showAnimal(Animal $animal)
    {
        return $this->render('animal/show_animal.html.twig', [
            "animal" => $animal
        ]);
    }
}
