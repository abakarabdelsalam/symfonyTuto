<?php

namespace App\Controller;

use App\Entity\Personnage;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/tto", name="personnage")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/persos", name="persos")
     */
    public function persos(): Response
    {

        Personnage::createPersonnages();
        return $this->render('personnage/persos.html.twig', [

            "MonTabs" => Personnage::$personnageRec

        ]);
    }

    /**
     * @Route("/persos/{nom}", name="afficPers")
     */
    public function afficPers($nom)
    {

        Personnage::createPersonnages();
        $perso = Personnage::getPersonnagesNam($nom);
        return $this->render('personnage/perso.html.twig', [

            "perso" => $perso

        ]);
    }
}