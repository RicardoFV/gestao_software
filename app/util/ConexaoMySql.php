<?php

namespace app\util;

class ConexaoMySql
{
    private $banco = 'sistema';
    private $localhost = 'localhost';
    private $usuario = 'root';
    private $senha = '';

    public function conectar()
    {
        try{         
        $conexao = new \PDO("mysql:host=$this->localhost;dbname=$this->banco",
        "$this->usuario",
        "$this->senha");
 
        return $conexao;

        }catch(PDOException $ex){
            $ex->getMessage();
        }
    }
}

