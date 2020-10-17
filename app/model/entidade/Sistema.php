<?php
class Sistema
{
    private $id;
    private $nome;
    private $imagem;
    private $descricao;
    private $id_versao;
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

