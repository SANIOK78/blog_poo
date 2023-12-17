<?php

namespace App\Controller;

use App\Model\ArticleManager;

class ArticleController extends AbstractController
{
    /**
     * Display home page
     */
    public function index():string
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll('id');

        // echo "<pre>";
        // var_dump($articles);
        // echo "</pre>";

        return $this->twig->render('Article/index.html.twig', [
            'articles' => $articles
        ] );
    }
}
