<?php
    
    // criando os campos
    $acao = 'cadastrar';
    $nome = '';
    $email = '';
    $perfil = '';
    $situacao = '';
    $senha = '';
    $repetir_senha = '';

?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Usuário</h1>
  </div>
</div>

<div class="container">

    <form method="post" id="form_cadastro_usuario" action="../projeto/app/controller/ControllerUsuario.php">
    <div class="form-row">
        <input type="hidden" value="<?= $acao?>" id="acao" name="acao">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" value="<?= $nome ?>" name="nome" id="nome" class="form-control" placeholder="Seu nome">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">E-mail</label>
            <input type="email" name="email" value="<?= $email ?>" id="email" class="form-control" placeholder="Seu E-mail">
        </div>
        <div class="form-group col-md-3">
            <label for="perfil">Perfil</label>
            <select name="perfil" id="perfil" class="form-control" value="<?= $perfil ?>">
                <option value="adm">Administrador</option>
                <option value="user">Usuário</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="situacao">Situação</label>
            <select name="situacao" id="situacao" class="form-control" value="<?= $situacao ?>">
                <option value="ativado">Ativado</option>
                <option value="desativado">Desativado</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="senha">Senha</label>
            <input type="password" value="<?= $senha ?>" name="senha" id="senha" class="form-control" placeholder="Sua senha">
        </div>

        <div class="form-group col-md-4">
            <label for="repetir_senha">Repetir senha</label>
            <input type="password" value="<?= $repetir_senha ?>" name="repetir_senha" id="repetir_senha" class="form-control" placeholder="Repita a sua senha">
        </div>  
    
    </div>

    <div class="row justify-content-end">
            <button type="submit" id="btn_cadastrar_usuario" class="btn btn-custom btn-success mr-2 mt-2">Cadastrar</button>
            <button type="submit" id="btn_cancelar_usuario" class="btn btn-custom btn-success mt-2">Cancelar</button>
    </div>


    </form>

</div>