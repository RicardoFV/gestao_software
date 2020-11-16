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
        $query = 'insert into autenticar (id_usuario, sessao , dt_login) values(?,?, now())';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->autenticar->__get('id_usuario'));
        $stmt->bindValue(2, $this->autenticar->__get('sessao'));

        return $stmt->execute();
    }

    public function atualizarLogin(){
        $query = 'uddate autenticar set dt_login = now() where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->autenticar->__get('id'));
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function logof()
    {

    }

    public function consultar(){
        $query = 'select id, id_usuario, sessao from autenticar where id_usuario =?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->autenticar->__get('id_usuario'));

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}

