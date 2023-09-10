<?php

namespace APP\DAO;

use \PDO;
use \PDOException;

abstract class DAO 
{
    
    protected $conexao;


    public function __construct()
    {
        try{
            
            $dsn = "mysql:host=". $_ENV['db']['host'] .";dbname=" . $_ENV['db']['database'];
    
            $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
    
            } catch(PDOException $e) {
                $error = $e->getMessage();
                echo "Erro com banco de dados -> ".$error;
            }
    }




}