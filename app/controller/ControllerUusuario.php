<?php

// incluindo o arquivo qu carrega as classes
require_once '../../vendor/autoload.php';

use app\model\entidade\Usuario;
use app\model\persistencia\PersistenciaUsuario;
use app\util\Conexao;
// cria a variavel para passar a acao
$acao = null;
// recebe a acao
$acao = isset($_POST['acao']) ? $_POST['acao'] :$acao;
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
// instancia os objetos
$conexao = new Conexao;
$usuario = new Usuario();
$persitencia = new PersistenciaUsuario($conexao, $usuario);

// trabalha as açoes 

if($acao == 'cadastrar'){
    echo "chegou";
}
 