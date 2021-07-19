<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/arme", name="arme")
     */
    public function index(): Response
    {
        return $this->render('arme/index.html.twig', [
            'controller_name' => 'ArmeController',
        ]);
    }

    /**
     * @Route("/army", name="army")
     */
    public function arme(): Response
    {
        Arme::createArme();
        return $this->render('arme/armes.html.twig', [
            "tables" => Arme::$anneRec
        ]);
    }
    /**
     * @Route("/army/{nom} ", name="affich")
     */
    public function affich($nom): Response
    {
        Arme::createArme();
        $arme = Arme::getArmesNam($nom);
        return $this->render('arme/arme.html.twig', [
            "tables" => $arme
        ]);
    }
}