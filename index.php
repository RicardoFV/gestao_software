<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Software</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="public/css/estilo.css">
    <!-- scripts -->
    <script src="public/js/scripts.js"></script>
</head>
<body>
<div id="conteudo_principal">
        <!--inicio div  principal -->

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
                <form method="post" id="form_acesso">
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


    </div>
    <!--fim div  principal -->
    <footer class="fixed-bottom mb-4 text-center">
        &copy; Copyright 2000-2020 - Todos os Direitos Reservados
    </footer>
    
</body>
</html>