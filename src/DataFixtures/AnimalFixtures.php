<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $p1 = new Personne();
        $p1->setName("Ariel");
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setName("Rudolph");
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setName("Harry");
        $manager->persist($p3);

        $continent1 = new Continent();
        $continent1->setLibelle("Afrique");
        $manager->persist($continent1);

        $continent2 = new Continent();
        $continent2->setLibelle("Asie");
        $manager->persist($continent2);

        $continent3 = new Continent();
        $continent3->setLibelle("Amérique");
        $manager->persist($continent3);

        $continent4 = new Continent();
        $continent4->setLibelle("Europe");
        $manager->persist($continent4);

        $continent5 = new Continent();
        $continent5->setLibelle("Océanie");
        $manager->persist($continent5);

        $f1 = new Famille();
        $f1->setLibelle("Mammifères")
           ->setDescription("Animaux nourrissant leurs petits avec du lait");
        $manager->persist($f1);

        $f2 = new Famille();
        $f2->setLibelle("Reptiles")
            ->setDescription("Animaux vertébrés qui rampent");
        $manager->persist($f2);

        $f3 = new Famille();
        $f3->setLibelle("Poissons")
            ->setDescription("Animaux invertébrés du monde aquatique");
        $manager->persist($f3);


        $a1 = new Animal();
        $a1->setName('Chien')
            ->setDescription('Un animal domestique et de compagnie')
            ->setImage("chien.png")
            ->setWeight(10)
            ->setDangerous(false)
            ->setFamille($f1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5)
        ;

        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('Serpent')
            ->setDescription('Le serpent est un animal très dangereux')
            ->setImage("serpent.png")
            ->setWeight(4)
            ->setDangerous(true)
            ->setFamille($f2)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5)
        ;

        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('Cochon')
            ->setDescription('Le cochon est un animal d\'élevage')
            ->setImage("cochon.png")
            ->setWeight(15)
            ->setDangerous(false)
            ->setFamille($f1)
            ->addContinent($continent1)
            ->addContinent($continent4)
        ;

        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('Crocodile')
            ->setDescription('Pour ceux qui ne connaisse pas ke crocodile est aussi un animal 
            dangereux qui est capable de vivre aussi bien sur la terre que dans les eaux.')
            ->setImage("croco.png")
            ->setWeight(23)
            ->setDangerous(true)
            ->setFamille($f2)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent5)
        ;

        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('Requin')
            ->setDescription('Le requin est un animal marin qui attaque que lorsqu\'il a faim 
            ou qu\'il se sent en danger.')
            ->setImage("requin.png")
            ->setWeight(54)
            ->setDangerous(true)
            ->setFamille($f3)
            ->addContinent($continent3)
        ;

        $manager->persist($a5);

        $d1 = new Dispose();
        $d1->setPersonne($p1)
           ->setAnimal($a1)
           ->setNb(30);
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setPersonne($p1)
            ->setAnimal($a2)
            ->setNb(10);
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setPersonne($p1)
            ->setAnimal($a3)
            ->setNb(2);
        $manager->persist($d3);

        $d4 = new Dispose();
        $d4->setPersonne($p2)
            ->setAnimal($a3)
            ->setNb(5);
        $manager->persist($d4);

        $d5 = new Dispose();
        $d5->setPersonne($p2)
            ->setAnimal($a4)
            ->setNb(10);
        $manager->persist($d5);

        $d6 = new Dispose();
        $d6->setPersonne($p3)
            ->setAnimal($a5)
            ->setNb(20);
        $manager->persist($d6);

        $manager->flush();
    }
}
