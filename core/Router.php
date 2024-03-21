<?php

class Router
{
    public function start()
    {
        $url = $_SERVER['REQUEST_URI'];
        if ($url === "/") {
            $accueil = new MainController();
            $accueil->index();
        } 
        else {
        $buffer = ucfirst(explode("/", $url)[1] . "Controller");
       $controller = new $buffer();
       $controller->index();
    }
}
}
