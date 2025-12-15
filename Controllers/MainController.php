<?php

namespace Controllers;

use League\Plates\Engine;

// Le but : gérer la logique métier et envoyer les données à la vue.
class MainController
{
    private Engine $templates;

    public function __construct(Engine $engine)
    {
        $this->templates = $engine;
    }

    public function index() : void
    {
        echo $this->templates->render('home', ['gameName' => 'Genshin Impact']);
    }
}
