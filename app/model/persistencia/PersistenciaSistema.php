<?php

namespace app\model\persistencia;
use app\util\Conexao;
use app\model\entidade\Sistema;


class PersistenciaSistema
{
    private $conexao;
    private $sistema;

    public function __construct(Conexao $conexao, Sistema $sistema)
    {
        $this->conexao = $conexao->conectar();
        $this->sistema = $sistema;
    }


    public function cadastrar()
    {

    }

    public function atualizar()
    {

    }

    public function deletar()
    {

    }

    public function consultar()
    {

    }

    public function listar()
    {

    }
}

