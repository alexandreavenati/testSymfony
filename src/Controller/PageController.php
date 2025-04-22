<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

// Création d'une classe "PageController"
class PageController {

    // Quand on demande l'url "/" ma fonction est appelée
    // Création d'une annotation Route (page)
    #[Route('/', name:'home')]

    // Création d'une fonction "home"
    public function home(){
        var_dump('Page accueil'); die;
    }

    #[Route('/contact', name:'contact')]

    // Création d'une fonction "contact"
    public function contact(){
        var_dump('Page contact'); die;
    }

    #[Route('/a-propos', name:'about')]

    // Création d'une fonction "about"
    public function about(){
        var_dump('Page a-propos'); die;
    }
}