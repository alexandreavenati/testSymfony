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

        $articles = [
            1 => [
                "id" => 1,
                "title" => "Article 1",
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
                "created_at" => new \DateTime(),
                "image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
                "is_published" => true
            ],
        
            2 => [
                "id" => 2,
                "title" => "Article 2",
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
                "created_at" => new \DateTime(),
                "image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
                "is_published" => false
            ],
            3 => [
                "id" => 3,
                "title" => "Article 3",
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
                "created_at" => new \DateTime(),
                "image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
                "is_published" => true
            ]
        ];

        return $this->render('list-articles.html.twig', ['articles' => $articles]);
    }

    #[Route('/creer-article', name:'create-article')]

    // Création d'une fonction "createArticle"
    public function createArticle(){
        return $this->render('create-article.html.twig');

    }

    #[Route('/supprimer-article', name:'delete-article')]

    // Création d'une fonction "delArticle"
    public function delArticle(){
        return $this->render('del-article.html.twig');
    }
}