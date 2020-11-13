<?php
// incluindo o arquivo qu carrega as classes
require_once '../../vendor/autoload.php';

use app\model\entidade\Autenticar;
use app\model\persistencia\PersistenciaAutenticar;
use app\util\Conexao;
use app\util\ConexaoMySql;
// cria a variavel para passar a acao
$acao = null;
// recebe a acao
$acao = isset($_POST['acao']) ? $_POST['acao'] :$acao;
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
// instancia os objetos
$conexao = new ConexaoMySql();
$autenticar = new Autenticar();
$persitencia = new PersistenciaAutenticar($conexao, $autenticar);

if($acao == 'login'){
    print_r($_POST);
}