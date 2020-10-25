<?php

namespace app\model\entidade;

class Autenticar
{
    
    private $id;
    private $id_usuario;
    private $sessao;
    private $dt_login;
    private $dt_logof;
    

    public function __set($atributo, $valor){
        $this-> $atributo = $valor;
    }

    public function __get($valor){
        return $this-> $valor;
    }
}

