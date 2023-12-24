<?php

namespace App\Controller;

use App\Model\ArticleManager;


class ArticleController extends AbstractController
{
    // affichage de tous les articles avec son tag
    public function index():string
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAllArticlesAndTagName();

        return $this->twig->render('Article/index.html.twig', [
            'articles' => $articles,           
        ] );
    }

    // affichage d'un seul article
    public function show(int $id)
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneById($id);

        // Formatage date au format Locale
        $datePublication = date('d-m-Y H:m', strtotime($article['created_at']));
  
        return $this->twig->render('Article/show.html.twig', [
            'article' => $article,
            "datePublication" => $datePublication
        ] );
    }
}
