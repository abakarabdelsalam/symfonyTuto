<?php

namespace App\Entity;

class Personnage
{
    public $nom;
    public $age;
    public $sex;
    public $carac = [];

    public static $personnageRec = [];
    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnageRec[] = $this;
    }

    public static function createPersonnages()
    {
        $p1 = new Personnage("Marc",  45, true, [
            "force" => 5,
            "agi" => 4,
            "intel" => 3

        ]);
        $p2 = new Personnage("Milo",  15, true, [
            "force" => 4,
            "agi" => 4,
            "intel" => 1

        ]);
        $p2 = new Personnage("Tya",  35, false, [
            "force" => 2,
            "agi" => 6,
            "intel" => 2

        ]);
    }

    public static function getPersonnagesNam($nom)
    {

        foreach (self::$personnageRec as $perso) {
            if (strtolower($perso->nom) === $nom) {
                return $perso;
            }
        }
    }
}