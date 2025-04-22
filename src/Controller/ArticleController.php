<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController {

    #[Route('/liste-d-articles', name:'list-article')]

    // Création d'une fonction "articleList"
    public function articleList(){
        return $this->render('articleList.html.twig');
    }

    #[Route('/creer-article', name:'create-article')]

    // Création d'une fonction "createArticle"
    public function createArticle(){
        return $this->render('createArticle.html.twig');

    }

    #[Route('/supprimer-article', name:'delete-article')]

    // Création d'une fonction "delArticle"
    public function delArticle(){
        return $this->render('delArticle.html.twig');
    }
}