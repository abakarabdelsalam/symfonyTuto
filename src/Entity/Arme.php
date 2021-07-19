<?php

namespace App\Entity;

class Arme
{
    public $nom;
    public $anne;
    public $mark;
    public $type = [];

    public static $anneRec = [];
    public function __construct($nom, $anne, $mark, $type)
    {

        $this->nom = $nom;
        $this->anne = $anne;
        $this->mark = $mark;
        $this->type = $type;
        self::$anneRec[] = $this;
    }

    public static function createArme()
    {

        $V1 = new Arme("arc", "francais", true, [

            'puissance' => 50,
            'afeux' => 10,
            'taille' => 30,
            'tailles' => 10

        ]);
        $V2 = new Arme("epee", "belg", false,  [

            'puissance' => 60,
            'afeux' => 20,
            'taille' => 10,
            'tailles' => 10

        ]);
        $V2 = new Arme("hache", "francais", true,  [

            'puissance' => 30,
            'afeux' => 20,
            'taille' => 40,
            'tailles' => 10

        ]);
    }
    public static function getArmesNam($nom)
    {

        foreach (self::$anneRec as $arme) {
            if (strtolower($arme->nom) === $nom) {
                return $arme;
            }
        }
    }
}