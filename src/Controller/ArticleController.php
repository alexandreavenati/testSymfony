<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;


class ArticleController {

    #[Route('/liste-d-articles', name:'list-article')]

    // Création d'une fonction "articleList"
    public function articleList(){
        return new Response("<h1>Bienvenue sur la liste d'articles</h1>", 200);
    }

    #[Route('/creer-article', name:'create-article')]

    // Création d'une fonction "createArticle"
    public function createArticle(){
        return new Response("<h1>Bienvenue sur la page de création d'article</h1>", 200);

    }

    #[Route('/supprimer-article', name:'delete-article')]

    // Création d'une fonction "delArticle"
    public function delArticle(){
        return new Response("<h1>Bienvenue sur la page de suppression d'articles</h1>", 200);
    }
}