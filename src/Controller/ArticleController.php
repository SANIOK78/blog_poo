<?php

namespace App\Controller;

use App\Model\ArticleManager;

class ArticleController extends AbstractController
{
    // affichage de tous les articles
    public function index():string
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll('id');

        return $this->twig->render('Article/index.html.twig', [
            'articles' => $articles
        ] );
    }

    // affichage d'un seul article
    public function show(int $id): string
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneById($id);
        
        return $this->twig->render('Article/show.html.twig', [
            'article' => $article
        ] );
    }
}
