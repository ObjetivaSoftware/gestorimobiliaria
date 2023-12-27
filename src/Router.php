<?php

declare (strict_types = 1);

namespace App;

class Router
{
    public $controller;
    public $action;
    public function __construct(
        private array $__SERVER
    ){

        $uri = explode('/', explode('?', $this->__SERVER['REQUEST_URI'])[0]);
        $controllerName = ($uri[1] ?? 'Index');
        $controllerName = ucfirst(empty($controllerName) ? 'Index' : $controllerName);

        $action = ($uri[2] ?? 'Index');
        $this->action = ucfirst(empty($action) ? 'Index' : $action);
        
        $controllerNameSpace = "App\Controllers\Errors\Erro404Controller";
        $this->controller = new $controllerNameSpace($this);

        
        $pathController = __DIR__."/Controllers/$controllerName/{$controllerName}Controller.php";

        
        if(is_file($pathController)){
            $controllerNameSpace = "App\Controllers\\$controllerName\\{$controllerName}Controller";
            $this->controller = new $controllerNameSpace($this);
            $this->controller->index();
            exit;
        }

        $controllerName = str_replace('-', '_', $controllerName);

        $pathController = __DIR__."/Controllers/$controllerName/{$controllerName}Controller.php";

        if(is_file($pathController)){
            $controllerNameSpace = "App\Controllers\\$controllerName\\{$controllerName}Controller";
            $this->controller = new $controllerNameSpace($this);
            $this->controller->index();
            exit;
        }

        $this->controller->index();
        exit;
    }
}