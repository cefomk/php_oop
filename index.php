<?php

// https://www.php.net/manual/fr/language.oop5.php

class Voiture
{
    public $couleur = 'Rouge';
    // private $couleur = 'Rouge';
    const ROUE = 4;
    public static $jante = 'metal';

    public  function __construct()
    {
        echo 'Construct';        
    }
    
    public function acceler()
    {
        // echo 'La voiture accelere.';
        return 'Vroum !';
    }

    public static function accelerStatic()
    {
        return 'Vroum Static !';
    }

};

// $citadine = new Voiture();
//var_dump($citadine);

// echo $citadine->couleur;
// $citadine->acceler();
// echo $citadine->acceler();

// echo 'Ma voiture a ' . Voiture::ROUE . ' roues.';
// echo Voiture::$jante;
echo Voiture::accelerStatic();