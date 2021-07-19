<?php

namespace App\Entity;

use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;

class Arme
{
    private $nom;
    private $anne;
    private $mark;


    public static $anneRec = [];
    public function __construct($nom, $anne, $mark)
    {

        $this->nom = $nom;
        $this->anne = $anne;
        $this->mark = $mark;
        self::$anneRec[] = $this;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getAnne()
    {
        return $this->anne;
    }
    public function getMark()
    {
        return $this->mark;
    }


    public function setNon($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function setAnne($anne)
    {
        $this->anne = $anne;
        return $this;
    }

    public function setMark($mark)
    {
        $this->mark = $mark;
        return $this;
    }





    public static function createArme()
    {

        $V1 = new Arme("arc", "francais", true);
        $V2 = new Arme("epee", "belg", false);
        $V2 = new Arme("hache", "francais", true);
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

// class Arme
// {
//     public $nom;
//     public $anne;
//     public $mark;
//     public $type = [];

//     public static $anneRec = [];
//     public function __construct($nom, $anne, $mark, $type)
//     {

//         $this->nom = $nom;
//         $this->anne = $anne;
//         $this->mark = $mark;
//         $this->type = $type;
//         self::$anneRec[] = $this;
//     }

//     public static function createArme()
//     {

//         $V1 = new Arme("arc", "francais", true, [

//             'puissance' => 50,
//             'afeux' => 10,
//             'taille' => 30,
//             'tailles' => 10

//         ]);
//         $V2 = new Arme("epee", "belg", false,  [

//             'puissance' => 60,
//             'afeux' => 20,
//             'taille' => 10,
//             'tailles' => 10

//         ]);
//         $V2 = new Arme("hache", "francais", true,  [

//             'puissance' => 30,
//             'afeux' => 20,
//             'taille' => 40,
//             'tailles' => 10

//         ]);
//     }
//     public static function getArmesNam($nom)
//     {

//         foreach (self::$anneRec as $arme) {
//             if (strtolower($arme->nom) === $nom) {
//                 return $arme;
//             }
//         }
//     }
// }