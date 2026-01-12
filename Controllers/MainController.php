<?php

namespace Controllers;

use League\Plates\Engine;
use Models\PersonnageDAO;
use Service\PersonnageService;

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
        $dao = new PersonnageDAO();
        $service = new PersonnageService();

        // Liste de personnages
        $listPersonnage = $service->getAllPersonnages();

        // Premier personnage (existant)
        $first = null;
        if (!empty($listPersonnageRaw)) {
            $first = $service->getPersonnageById($listPersonnage[0]->getId());
            
        }

        // Personnage inexistant
         $other = $service->getPersonnageById('id_qui_nexiste_pas');

        echo $this->templates->render('home', [
            'gameName' => 'Genshin Impact',
            'listPersonnage' => $listPersonnage,
            'first' => $first,
            'other' => $other
        ]);
        
    }
}
