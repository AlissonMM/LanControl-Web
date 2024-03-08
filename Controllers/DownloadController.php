<?php

namespace Controllers;

use \Models\DB;

class DownloadController
{
    private $view;

    public function __construct()
    {
        $this->view = new \Views\MainView('download');
    }

    public function executar()
    {
        $conn = new DB();
        if($conn->verifySession())
        {
            $this->view->render();
            return;
        }
        header("Location: login");
        exit;
    }
}