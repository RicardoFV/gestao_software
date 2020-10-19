<?php

namespace app\model\entidade;

class Tratamento
{
    private $id;
    private $nome;
    private $id_sistema;
    private $id_usuario;
    private $dt_entrega;
    private $dt_inclusao;
    private $dt_alteracao;

    public function __set($atributo, $valor){
        $this-> $atributo = $valor;
    }

    public function __get($valor){
        return $this-> $valor;
    }
}

