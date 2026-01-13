<?php
namespace Controllers\Router\Route;

use Controllers\MainController;
use Controllers\Router\Route;

class RouteIndex extends Route 
{
    private MainController $controller;

      public function __construct(string $actionName, MainController $controller) {
        parent::__construct($actionName);
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->index();
    }

    public function post($params = []) {
        return $this->controller->index();
    }
}
