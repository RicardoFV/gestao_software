<?php
// incluindo o arquivo qu carrega as classes
require_once '../../vendor/autoload.php';

use app\model\entidade\Autenticar;
use app\model\persistencia\PersistenciaAutenticar;
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
$autenticar = new Autenticar();
$persitenciaUsuario = new PersistenciaUsuario($conexao, $usuario);
$persitencia = new PersistenciaAutenticar($conexao, $autenticar);

if($acao == 'login'){
    $usuario->__set('email', $_POST['email']);
    $usuario->setSenha($_POST['senha']);
    // verifica se o usuario existe 
    if($persitenciaUsuario->consultarUsuario()){
        $user = $persitenciaUsuario->consultarUsuario();

        print_r($user);
    }
}