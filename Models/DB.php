<?php

namespace Models;

use PDO;

class DB
{

    private $pdo;

    public function __construct()
    {
        $config = file_get_contents(__DIR__ . "/config.json");
        $config = json_decode($config);
        $driver = $config->driver;
        $host = $config->host;
        $db = $config->db;
        $port = $config->port;
        $charset = $config->charset;
        $user = $config->user;
        $pass = $config->pass;

        $dsn = "$driver:host=$host;dbname=$db;port=$port;charset=$charset";
    
        try
        {
            $this->pdo = new PDO($dsn, $user, $pass);
        }
        catch (\PDOException $e)
        {
            echo "error: {$e->getMessage()}";
            exit;
        }
        
    }

    //Array associativo
    //params = ['nome' => 'van der waals', 'numero' => 2, 'email' => 'valterwals@gmail.com'];

    public function insert($table, $params)
    {

        $keys = array_keys($params);
        $sql = "INSERT INTO $table (";
        $placeholderString = implode(', ', $keys);
        $sql .= "$placeholderString)";
        $sql .= "VALUES (";
        foreach($keys as $key => $value)
        {
            $placeholder[$key] = ":$value";
        }
        $placeholderString = implode(', ', $placeholder);
        $sql .= "$placeholderString)";
        
        echo "<br> $sql"; 
        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
        }
        catch(\PDOException $e)
        {
            echo "error: {$e->getMessage()}";
            exit;
        }
        echo "<br> $sql"; 
    }

    public function verifySession()
    {
        session_start();
        return isset($_SESSION['email']);
    }

    public function select($table, $params)
    {

        $sql = "SELECT * FROM $table WHERE ";
        foreach($params as $key => $value)
        {
            $placeholder[$key] = "$key=:$key";
        }
        $placeholderString = implode(" AND ", $placeholder);
        
        $sql .= $placeholderString;
        echo $sql;
        try
        {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        }
        catch (\PDOException $e)
        {
            echo "error: {$e->getMessage()}";
            exit;
        }
    }
}