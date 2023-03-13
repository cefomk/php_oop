<?php
// require_once './Classes/Voiture.php';
// require_once './Classes/Fruit.php';
// require_once './Classes/User.php';

// function my_autoloader($class)
// {
//     include 'Classes/' . $class . '.php';
// }
// spl_autoload_register('my_autoloader');

spl_autoload_register(function ($class) {
    include 'Classes/' . $class . '.php';
});

// $citadine = new Voiture();
// var_dump($citadine);

// echo $citadine->couleur;
// $citadine->acceler(50);
// echo $citadine->acceler(50);

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

