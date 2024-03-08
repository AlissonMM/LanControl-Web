<?php

namespace Controllers;

use PDO;

use \Models\DB;

class LoginController
{
    private $view;

    public function __construct()
    {
        $this->view = new \Views\MainView('login');
    }

    public function executar()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $method = strtolower($method);
        $this->$method();
    }

    public function get()
    {
        $this->view->render();
    }

    public function post()
    {
        if(isset($_POST['submit']))
        {
            $conn = new DB();

            $dados = filter_input_array(INPUT_POST);
            unset($dados['submit']);
            $table = "usuario";

            $row = $conn->select($table, ["email" => $dados['email']]);
            if($row->rowCount() !== 1)
            {
                header("Location: login");
                exit;
            }
            $registro = $row->fetch(PDO::FETCH_ASSOC);
            if(password_verify($dados['senha'], $registro['senha']))
            {
                session_start();
                $_SESSION['email'] = $dados['email'];
                header("Location: home");
                exit;
            }
            echo "dados nao conferem";
        }
    }
}