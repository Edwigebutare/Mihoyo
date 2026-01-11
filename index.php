<?php

// Charger le fichier l'autoloader
require_once __DIR__ . '/Helpers/Psr4AutoloaderClass.php';

// Créer une instance de l'autoloader
$loader = new Helpers\Psr4AutoloaderClass();

// Enregistrer l'autoloader pour PHP
$loader->register();
$loader->addNamespace('\Helpers', '/Helpers');
// Namespace Controller
$loader->addNamespace('\Controllers', '/Controllers');
// Inclure Plates pour la gestion des templates
$loader->addNamespace('\League\Plates','/Vendor/Plates/src');
// Namespace Models
$loader->addNamespace('\Models','/Models');
// Namespace Service
$loader->addNamespace('\Service','/Service');
// Namespace Config
$loader->addNamespace('\Config','/Config');

// Import du moteur de template plates
use League\Plates\Engine;

// Initialisation de l'engine avec le dossier Views
$engine = new Engine(__DIR__ . '/Views');

// Appel du contrôleur principal
use Controllers\MainController;
$controller = new MainController($engine);
// Appel de la méthode index pour afficher la page
$controller->index();