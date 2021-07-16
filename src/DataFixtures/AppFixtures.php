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



        $manager->flush();
    }
}






