<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Usuário</h1>
  </div>
</div>

<div class="container">

    <form method="post" id="form_cadastro_usuario">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Seu E-mal">
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Perfil</label>
            <select name="" id="" class="form-control">
                <option value="">Administrador</option>
                <option value="">Usuário</option>
            </select>
        </div>
        <div class="form-group col-md-1">
            <label for="situacao">Situação</label><br>
            <input class="form-check-input ml-1 mt-2" type="checkbox" value="" id="situacao">
            <label class="form-check-label ml-4 mt-1" for="situacao">
            Ativado
            </label>
        </div>
        <div class="form-group col-md-4">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
        </div>

        <div class="form-group col-md-4">
            <label for="repetir_senha">Repetir senha</label>
            <input type="password" name="repetir_senha" id="repetir_senha" class="form-control" placeholder="Repita a sua senha">
        </div>  
    
    </div>

    <div class="row justify-content-end">
            <button type="submit" id="btn_cadastrar_usuario" disabled class="btn btn-custom btn-success mr-2 mt-2">Cadastrar</button>
            <button type="submit" id="btn_cancelar_usuario" class="btn btn-custom btn-success mt-2">Cancelar</button>
    </div>


    </form>

</div>