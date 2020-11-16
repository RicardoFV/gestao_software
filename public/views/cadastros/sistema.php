<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Sistema</h1>
  </div>
</div>

<div class="container">

    <form method="post" id="form_cadastro_usuario">
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome">
        </div>
        <div class="form-group col-md-4">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control-file" id="imagem">
        </div>
        <div class="form-group col-md-3">
            <label for="imagem">Versão</label>
            <select name="" id="" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Nova Versão</label><br>
            <button class="btn btn-block btn-custom btn-primary mr-1">+</button>
        </div>
        
        <div class="form-group col-md-4">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" rows="3"></textarea>
        </div>
        
        
    
    </div>

    <div class="row justify-content-end">
            <button type="submit" id="btn_cadastrar_usuario" class="btn btn-custom btn-success mr-2 mt-2">Cadastrar</button>
            <button type="submit" id="btn_cancelar_usuario" class="btn btn-custom btn-success mt-2">Cancelar</button>
    </div>


    </form>

</div>