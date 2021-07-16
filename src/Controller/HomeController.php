<?php

namespace App\Controller;

use App\Repository\AproposRepository;
use App\Repository\CompetencesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CompetencesRepository $competencesRepository, AproposRepository  $aproposRepository): Response
    {
        $technologies = $competencesRepository->findBy(array('categorie' => 'technologie'));
        $apropos = $aproposRepository->find(1);

        return $this->render('home/index.html.twig', [
            'apropos' => $apropos,
            'technologies' => $technologies
        ]);
    }
}
