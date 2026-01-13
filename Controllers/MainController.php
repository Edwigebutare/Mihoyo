<?php
declare(strict_types=1);
namespace Controllers;

use League\Plates\Engine;
use Models\PersonnageDAO;

// Le but : gérer la logique métier et envoyer les données à la vue.
class MainController
{
    private Engine $templates;

    public function __construct()
    {
        $this->templates = new Engine(__DIR__ . '/../Views');
    }

    public function index() : void
    {
        $dao = new PersonnageDAO();

        // Liste de personnages
        $listPersonnage = $dao->getAll();

        // Premier personnage (existant)
        //$first = null;
        //if (!empty($listPersonnageRaw)) {
            //$first = $service->getPersonnageById($listPersonnage[0]->getId());
         echo $this->templates->render('home', ['gameName' => 'Genshin Impact','listPersonnage' => $listPersonnage]);
            
        }

        public function displayLogs() : void{
        echo $this->templates->render('logs', [
        'title' => 'Logs']);
        }

        public function displayLogin() : void{
            echo $this->templates->render('login', [
            'title' => 'Login page']);
        }

}
       
?>