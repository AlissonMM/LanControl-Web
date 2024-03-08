<?php

namespace Controllers;

use Models\DB;

class CadastroController
{
    private $view;

    public function __construct()
    {
        $this->view = new \Views\MainView('cadastro');
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
            //Abre a conexão com o banco de dados
            $conn = new DB();

            //Coletando dados do formulário
            $dados = filter_input_array(INPUT_POST);

            //submit não será enviado ao banco
            unset($dados['submit']);

            //Criptografando senha
            $dados["senha"] = password_hash($dados["senha"], PASSWORD_BCRYPT);
            $dados = array_merge(["senha" => $dados['senha']], ["email" => $dados['email']], ["nome" => $dados['nome']]);
            $table = "usuario";
            var_dump($dados);
            $conn->insert($table, $dados);

            session_start();
            $_SESSION['email'] = $dados['email'];
            //Verificar a senha também

            header("Location: home");
            exit;
        }
    }
}