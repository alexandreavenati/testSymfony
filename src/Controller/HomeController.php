<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

// Création d'une classe "HomeController"
class HomeController {

    // Quand on demande l'url "/" ma fonction est appelée
    // Création d'une route
    #[Route('/', name:"home")]

    // Création d'une fonction "home"
    public function home(){
        var_dump('Page accueil'); die;
    }
}