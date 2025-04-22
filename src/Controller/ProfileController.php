<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController {

    #[Route('/profil', name:'profile')]

    public function profile() {

        $profile = [
            "firstName" => "David",
            "lastName" => "Robert",
            "job" => "Web dev",
            "languages" => ["JS", "PHP", "TS"],
            "avatar" => "https://f.hellowork.com/obs-static-images/seo/ObsJob/developpeur-web.jpg",
            "looksForJob" => false
        ];

        return $this->render('profile.html.twig', ['profile' => $profile]);
    }
}
