<?php

namespace Controllers;

class HomeController
{
    private $view;

    public function __construct()
    {
        $this->view = new \Views\MainView('home');
    }

    public function executar()
    {
        $this->view->render();
    }
}