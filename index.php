<?php

// https://www.php.net/manual/fr/language.oop5.php

require_once './Classes/Voiture.php';
require_once './Classes/Fruit.php';
require_once './Classes/User.php';

// $citadine = new Voiture();
// var_dump($citadine);

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

// $pomme = new Fruit();
// $pomme->nomFruit = 'Pomme Golden';
// echo $pomme->nomFruit;

$user1 = new Admin();
// var_dump($user1->methode1());
var_dump($user1->methode2());

