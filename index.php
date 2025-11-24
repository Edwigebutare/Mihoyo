<?php

//Charger l'autoloader
require_once __DIR__ . '/Helpers/Psr4AutoloaderClass.php';

//Créer l'objet autoloader
$loader = new Helpers\Psr4AutoloaderClass();

//Enregistrer l'autoloader auprès de PHP
$loader->register();

$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\Controllers', '/Controllers');
$loader->addNamespace('\Models', '/Models');
$loader->addNamespace('\Views', '/Views');
$loader->addNamespace('\Services', '/Services');
$loader->addNamespace('\Exceptions', '/Exceptions');
$loader->addNamespace('\Config', '/Config');