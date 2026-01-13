<?php
declare(strict_types=1);

// Charger le fichier l'autoloader
require_once __DIR__ . '/Helpers/Psr4AutoloaderClass.php';
require_once __DIR__ . '/Vendor/Plates/src/Engine.php';
require_once __DIR__ . '/Controllers/MainController.php';
require_once __DIR__ . '/Controllers/PersoController.php';
require_once __DIR__ . '/Controllers/Router/Route.php';
require_once __DIR__ . '/Controllers/Router/Route/RouteAddPerso.php';
// Import du moteur de template plates
use League\Plates\Engine;
use Controllers\MainController;
use Controllers\Router\Router;
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

$router = new Router('action');
$router->routing($_GET, $_POST);
