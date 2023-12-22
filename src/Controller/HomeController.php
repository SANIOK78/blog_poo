<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function welcome(): string
    {
        return $this->twig->render('Home/index.html.twig');
    }
}
