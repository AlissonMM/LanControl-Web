<?php

namespace Controllers;

class SairController
{
    public function __construct()
    {
        $this->view = new \Views\MainView('home');
    }

    public function executar()
    {
        session_start();
        session_destroy();
        session_commit();
        $this->view->render();
    }
}