<?php

namespace Controllers\Router;

use Exception;
abstract class Route {
    protected string $actionName;
    public function __construct(string $actionName ='')
    {
        $this->actionName = $actionName;
    }
    abstract public function get(array $params = []);
    abstract public function post(array $params = []);
    
    public function action($params = [], $method = 'GET') {
        if (strtoupper($method) === 'POST') {
            return $this->post($params);
        }
        return $this->get($params);
    }

    protected function getParam(array $array, string $paramName, bool $canBeEmpty = true) {
        if (!isset($array[$paramName])) 
            {
                throw new Exception("Paramètre '$paramName' absent");
            }
            if (!$canBeEmpty && empty($array[$paramName])) 
            {
            throw new Exception("Paramètre '$paramName' vide");
            }

        return $array[$paramName];
    }
}
?>