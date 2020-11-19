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
        // passa as informações para a classe autenticar
        $autenticar->__set('id_usuario', $user->id);
        $autenticar->__set('sessao', 1);
        // iniciar a sessao
        session_start();
        // recebe os dados de acesso
        $acesso = $persitencia->consultar();

        // verifica se tem id_usuario e se a sessao e 1
        if(isset($acesso->id_usuario) && $acesso->sessao == 1){
            // passa os dados para a sessao
            $_SESSION['id_autenticar'] = $acesso->id;
            $_SESSION['id_usuario_existente'] = $acesso->id_usuario;
                        
            $autenticar->__set('id', $acesso->id);
            $persitencia->atualizarLogin();
            header('location:../../?page=tela_inicial');
                    
        }else{
            // coloca os dados para persistir na autenticacao
            if($persitencia->login()){ 
                // passa o id_usuario para a sessao
                $_SESSION['id_usuario_novo'] = $acesso = $user->id;
                header('location:../../?page=tela_inicial');
            }
        }

    }else{

    }
}else if($acao == 'sair'){
    $autenticar->__set('sessao', 0);
    $persitencia->logof();
}