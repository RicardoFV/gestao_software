<?php

namespace app\model\persistencia;
use app\util\Conexao;
use app\util\ConexaoMySql;
use app\model\entidade\Usuario;
class PersistenciaUsuario
{

    private $conexao;
    private $usuario;

    public function __construct(ConexaoMySql $conexao, Usuario $usuario)
    {
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }

    public function cadastrar()
    {
        $query = "insert into usuarios(nome, email, senha, perfil_acesso, dt_inclusao, dt_alteracao) values(?,?,?,?,now(),now())";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->usuario->__get('nome'));
        $stmt->bindValue(2,$this->usuario->__get('email'));
        $stmt->bindValue(3,$this->usuario->getSenha());
        $stmt->bindValue(4,$this->usuario->__get('perfil_acesso'));
        // retorna o valor
        return $stmt->execute();
    }

    public function atualizar()
    {
        $query = "update usuarios set nome= ?, email=?, senha =?, perfil_acesso = ?, dt_alteracao = sysdate where id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->usuario->__get('nome'));
        $stmt->bindValue(2,$this->usuario->__get('email'));
        $stmt->bindValue(3,$this->usuario->getSenha());
        $stmt->bindValue(4,$this->usuario->__get('perfil_acesso'));
        $stmt->bindValue(5,$this->usuario->__get('id'));
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function deletar($id)
    {
        $query = "delete from usuarios where id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        // retorna o valor
        return $stmt->execute();
    }

    public function consultar($id)
    {
        $query = "select * from usuarios where id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);

    }

    public function listar()
    {
        $query = "select * from usuarios";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}

