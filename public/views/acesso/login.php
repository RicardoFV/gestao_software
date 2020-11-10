<?php
$acao = 'cadastrar'; 
$nome ='';
$email ='';
$senha ='';

?>


<h1 class="text-center mt-2">Bem vindo ao Gestão de Software</h1>

        <div class="container">
            <!-- inicio div secundaria -->

            <div class="text-center col-12">
                <!-- iniicio logo -->
                <img src="public/img/login2.png" alt="imagem - login">
            </div>
            <!-- fim logo -->


            <div class="col-6 container">
                <!-- iniicio formulario -->
                <form method="post" id="form_acesso" action="../../../controller/ControllerUsuario.php">
                    <!--inicio formulario -->
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                    <p class="erros" id="erro_login"></p>

                    <span id="link-telaprincipal" class="row justify-content-end mr-1">
                            <a href="#" id="link_esqueceu_senha" class="btn btn-custom badge-primary mb-2">Esqueceu a Senha</a>
                    </span>

                    <button type="submit" id="acessar_sistema" class="btn btn-custom btn-success btn-lg btn-block mt-2">Acessar</button>
                </form>
                <!--fim formulario -->
            </div>

        </div>
        <!-- fim div secundaria -->