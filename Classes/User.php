<?php
class User
{
    // public $name = "Jane Doe";
    protected $name = "Jane Doe";

    public function methode1()
    {
        $userName = $this->name;
        $userName = "Je suis l'utilisateur: $userName";
        return $userName;
    }
}
