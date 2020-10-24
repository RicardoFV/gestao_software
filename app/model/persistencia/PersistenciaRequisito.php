<?php

namespace app\model\persistencia;
use app\util\Conexao;
use app\model\entidade\Requisito;

class PersistenciaRequisito
{
    private $conexao;
    private $requisito;

    public function __construct(Conexao $conexao, Requisito $requisito)
    {
        $this->conexao = $conexao->conectar();
        $this->requisito = $requisito;
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

