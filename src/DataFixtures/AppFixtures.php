<?php

namespace App\DataFixtures;

use App\Entity\Apropos;
use App\Entity\Competences;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $text = new Apropos();
        $text->setTexte("Faisant preuve de curiosité professionnelle et avide de nouvelles connaissances, j'aime apprendre - et comprendre - autant sur le plan professionnel que personnel et relationnel.");
        $manager->persist($text);

        $competence1 = new Competences();
        $competence1->setNom('html');
        $competence1->setCategorie('technologie');
        $manager->persist($competence1);

        $competence2 = new Competences();
        $competence2->setNom('css');
        $competence2->setCategorie('technologie');
        $manager->persist($competence2);

        $competence3 = new Competences();
        $competence3->setNom('php');
        $competence3->setCategorie('technologie');
        $manager->persist($competence3);

        $competence4 = new Competences();
        $competence4->setNom('javascript');
        $competence4->setCategorie('technologie');
        $manager->persist($competence4);

        $competence5 = new Competences();
        $competence5->setNom('MySql');
        $competence5->setCategorie('technologie');
        $manager->persist($competence5);

        $competence6 = new Competences();
        $competence6->setNom('symfony');
        $competence6->setCategorie('frameworks');
        $manager->persist($competence6);

        $competence7 = new Competences();
        $competence7->setNom('bootstrap');
        $competence7->setCategorie('frameworks');
        $manager->persist($competence7);

        $competence8 = new Competences();
        $competence8->setNom('fontAwesome');
        $competence8->setCategorie('frameworks');
        $manager->persist($competence8);

        $competence9 = new Competences();
        $competence9->setNom('twig');
        $competence9->setCategorie('frameworks');
        $manager->persist($competence9);

        $competence10 = new Competences();
        $competence10->setNom('PrestaShop');
        $competence10->setCategorie('cms');
        $manager->persist($competence10);

        $competence11 = new Competences();
        $competence11->setNom('concrete5');
        $competence11->setCategorie('cms');
        $manager->persist($competence11);

        $competence12 = new Competences();
        $competence12->setNom('wordpress');
        $competence12->setCategorie('cms');
        $manager->persist($competence12);

        $competence13 = new Competences();
        $competence13->setNom('dolibarr');
        $competence13->setCategorie('cms');
        $manager->persist($competence13);



        $manager->flush();
    }
}






