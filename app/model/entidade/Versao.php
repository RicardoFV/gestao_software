<?php
class Versao
{
    private $id;
    private $nome;
    private $dt_inclusao;
    private $dt_alteracao;
    private $id_usuario;

    public function __set($atributo, $valor){
        $this-> $atributo = $valor;
    }

    public function __get($valor){
        return $this-> $valor;
    }
}

