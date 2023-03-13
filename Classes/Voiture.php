<?php
class Voiture
{
    // public $couleur = 'Rouge';
    // private $couleur = 'Rouge';
    private $couleur;
    public $vitesse;

    const ROUE = 4;
    public static $jante = 'metal';

    public  function __construct()
    {
        // echo 'La methode Construct est appelé.';      
    }

    public function setCouleur($couleurProp)
    {
        $this->couleur = $couleurProp;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function acceler($vitesseProp)
    {
        // echo 'La voiture accelere.';
        // return 'Vroum !';
        return $this->vitesse = $vitesseProp + 10;
    }

    public static function accelerStatic()
    {
        return 'Vroum Static !';
    }

    public function __destruct()
    {
        // echo 'Couleur de la voiture: ' . $this->couleur;
    }
}