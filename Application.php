<?php

define('INCLUDE_PATH_FULL', 'http://localhost/php-danki/mvc/Views/pages/');
class Application
{
    public function executar()
    {
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';
        $url = ucfirst($url);
        $url .= "Controller";
        if(file_exists("Controllers/$url.php"))
        {
            $className = "Controllers\\$url";
            $controller = new $className();
            $controller->executar();
        }
        else
        {
            die("Não possível acessar a página requerida");
        }
    }
}