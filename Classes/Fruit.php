<?php
class Fruit
{
    private $nomFruit;

    public function __get($nom)
    {
        // return "L'attribut (propriete) $nom est innacessible";
        return $this->nomFruit;
    }

    public function __set($nom,$val)
    {
        $this->$nom = $val;
    }

};