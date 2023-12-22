<?php

return [
    '' => ['HomeController', 'welcome',],             //page accueil
    'articles' => ['ArticleController', 'index',],   // tous les 'articles'
    'article/show' => ['ArticleController', 'show', ['id']],   //article.Id
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
];
