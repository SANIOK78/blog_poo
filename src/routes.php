<?php

/*
liste des routes accessibles de votre application, ajoutez chaque 
nouvelle route ici
// clé : route à correspondre
// valeurs : 1. nom du contrôleur
// 2. nom de la méthode
// 3. (facultatif) tableau de clés de chaîne de requête à envoyer en paramètre à la méthode
par exemple, la route '/item/edit?id=1' exécutera $itemController->edit(1) */
return [
    '' => ['ArticleController', 'index',],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
];
