<?php
namespace app\util;

class Conexao 
{
    /*  cria as variaveis*/
    private $usuario = 'system';
    private $senha = '1234';

    /* cria o metodo */
    public function conectar(){

        // passa as informaçoes para o metodo
        $conexao = oci_connect($this->usuario, $this->senha, '127.0.0.1/XE');
        // caso nao tenha canexo 
        if(!$conexao){
           // echo 'erro ao conectar';
            $erro = oci_error();
            trigger_error(htmlentities($erro['message'], ENT_QUOTES), E_USER_ERROR);
        // senao retorna conectado.
        }else{
            //echo 'usuário conectado';
        }    
        return $conexao;
    }
}

/*
$c = new Conexao();

$c->conectar(); 

*/    

   


