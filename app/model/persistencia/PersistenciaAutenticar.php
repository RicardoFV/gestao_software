<?php

namespace app\model\persistencia;
use app\util\Conexao;
use app\model\entidade\Autenticar;
use app\util\ConexaoMySql;
class PersistenciaAutenticar
{
    private $conexao;
    private $autenticar;

    public function __construct(ConexaoMySql $conexao, Autenticar $autenticar)
    {
        $this->conexao = $conexao->conectar();
        $this->autenticar = $autenticar;
    }

    public function login()
    {

    }

    public function logof()
    {

    }
}

