<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// Création d'une classe "PageController"
class PageController extends AbstractController {

    // Quand on demande l'url "/" ma fonction est appelée
    // Création d'une annotation Route (page)
    #[Route('/', name:'home')]

    // Création d'une fonction "home"
    public function home(){
        // Utilisation de la méthode render qui permet de récupérer un fichier twig
        return $this->render('home.html.twig');
    }

    #[Route('/contact', name:'contact')]

    // Création d'une fonction "contact"
    public function contact(){
        return $this->render('contact.html.twig');
    }

    #[Route('/a-propos', name:'about')]

    // Création d'une fonction "about"
    public function about(){
        return $this->render('about.html.twig');
    }
}