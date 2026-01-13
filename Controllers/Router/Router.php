<?php
declare(strict_types=1);
namespace Controllers\Router;

use Controllers\PersoController;
use Controllers\MainController;
use Controllers\Router\Route;

class Router {
    private $routeList = [];
    private $ctrlList = [];
    private $action_key;

    public function __construct(string $name_of_action_key = "action") {
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }

    private function createControllerList() {
        $this->ctrlList['main'] = new MainController();
        $this->ctrlList['perso'] = new PersoController();
        
    }

    private function createRouteList() {
        $this->routeList['index'] = new Route\RouteIndex('index',$this->ctrlList['main']);
        $this->routeList['add-perso'] = new Route\RouteAddPerso('add-perso',$this->ctrlList['perso']);
        $this->routeList['logs'] = new Route\RouteLogs('logs', $this->ctrlList['main']);
        $this->routeList['add-element'] = new Route\RouteAddElement('add-element', $this->ctrlList['perso']);
        $this->routeList['login'] = new Route\RouteLogin('add-element', $this->ctrlList['main']);

    }

    public function routing($get, $post) {
        $action = $get[$this->action_key] ?? 'index';
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $route = $this->routeList[$action] ?? $this->routeList['index'];
        $params = ($method === 'POST') ? $post : $get;

        $route->action($params, $method);
            
        }
}
?>