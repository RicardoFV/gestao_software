<?php

namespace app\model\entidade;

class Requisito
{
    private $id;
    private $nome;
    private $descricao;
    private $tipo_requisito;
    private $id_usuario;
    private $dt_inclusao;
    private $dt_alteracao;

    public function __set($atributo, $valor){
        $this-> $atributo = $valor;
    }

    public function __get($valor){
        return $this-> $valor;
    }
}

