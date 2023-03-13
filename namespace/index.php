<?php
// namespace Html;
namespace Code\Html;

class MaClasse
{
    public $titre = "";
    public function message()
    {
        echo "Un titre : {$this->titre}.";
    }
}

// $obj = new \Html\MaClasse();
$obj = new \Code\Html\MaClasse();
$obj->titre = "Cours OOP";
$obj->message();