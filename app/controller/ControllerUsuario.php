<?php

// incluindo o arquivo qu carrega as classes
require_once '../../vendor/autoload.php';

use app\model\entidade\Usuario;
use app\model\persistencia\PersistenciaUsuario;
use app\util\Conexao;
use app\util\ConexaoMySql;
// cria a variavel para passar a acao
$acao = null;
// recebe a acao
$acao = isset($_POST['acao']) ? $_POST['acao'] :$acao;
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
// instancia os objetos
$conexao = new ConexaoMySql();
$usuario = new Usuario();
$persitencia = new PersistenciaUsuario($conexao, $usuario);

// trabalha as açoes 

if($acao == 'cadastrar'){

    print_r($_POST);

    exit();

    $usuario->__set('nome', $_POST['nome']);
    $usuario->__set('email', $_POST['email']);
    $usuario->__set('perfil_acesso', $_POST['perfil']);
    $usuario->__set('situacao', $_POST['situacao']);
    $usuario->setSenha($_POST['senha']);

    if($persitencia->cadastrar()){
        return 'Cadastro Realizado Com Sucesso!';
    }
}else if($acao == 'consultar'){

}
 