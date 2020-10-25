<?php

namespace app\model\persistencia;
use app\util\Conexao;
use app\model\entidade\Autenticar;
class PersistenciaAutenticar
{
    private $conexao;
    private $autenticar;

    public function __construct(Conexao $conexao, Autenticar $autenticar)
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

