<?php

// https://www.php.net/manual/fr/language.oop5.php

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

};

// $citadine = new Voiture();
//var_dump($citadine);

// echo $citadine->couleur;
// $citadine->acceler();
// echo $citadine->acceler();

// echo 'Ma voiture a ' . Voiture::ROUE . ' roues.';
// echo Voiture::$jante;
//echo Voiture::accelerStatic();

// $sport = new Voiture();
// $sport->setCouleur('Jaune');
// echo $sport->getCouleur();

//  $sport = new Voiture();
//  echo $sport->acceler(20);

// class Fruit
// {
//     private $nomFruit;
    
//     public function __get($nom)
//     {
//         // return "L'attribut (propriete) $nom est innacessible";
//         return $this->nomFruit;
//     }

//     public function __set($nom,$val)
//     {
//         $this->$nom = $val;
//     }

// }

// $pomme = new Fruit();
// $pomme->nomFruit = 'Pomme Golden';
// echo $pomme->nomFruit;

// class Maclasse
// {
//     private $str;

//     public function __construct($param)
//     {
//      $this->str = $param;   
//     }

//     public function __toString()
//     {
//         return $this->str;
//     }
// }

// $objet = new Maclasse("Bonjour à vous !");

class User
{
    private $userName;

    public function __construct($name)
    {
     $this->userName = $name;   
    }

    public function getName()
    {
        return $this->userName;
    }
}

$bill = new User('Bill Cargo');
echo $bill->getName();