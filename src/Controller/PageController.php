<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

// Création d'une classe "PageController"
class PageController {

    // Quand on demande l'url "/" ma fonction est appelée
    // Création d'une annotation Route (page)
    #[Route('/', name:'home')]

    // Création d'une fonction "home"
    public function home(){
        // J'utilise la classe "Response" de Symfony pour renvoyer une réponse HTTP avec du HTML et le statut 200
        return new Response("<h1>Bienvenue sur la page d'accueil</h1>", 200);
    }

    #[Route('/contact', name:'contact')]

    // Création d'une fonction "contact"
    public function contact(){
        return new Response("<h1>Bienvenue sur la page des contacts</h1>", 200);
    }

    #[Route('/a-propos', name:'about')]

    // Création d'une fonction "about"
    public function about(){
        return new Response("<h1>Bienvenue sur la page à propos</h1>", 200);
    }
}