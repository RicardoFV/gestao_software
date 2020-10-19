<?php

namespace app\model\entidade;

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $perfil_acesso;
    private $dt_inclusao;
    private $dt_alteracao;
    private $situacao;

    public function __set($atributo, $valor){
        $this-> $atributo = $valor;
    }

    public function __get($valor){
        return $this-> $valor;
    }
}

