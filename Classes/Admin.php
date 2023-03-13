<?php
class Admin extends User
{
    public function methode2()
    {
        // $userName = User::methode1();
        $userName = parent::methode1();
        // $userName = $this->name;
        $userName = "Je suis l'utilisateur {$userName} dans la classe Admin";
        return $userName;
    }
}