
<!-- menu criado para que seja usado em todo o projeto -->

<!-- inicio criaçao menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="pagina_inicial" href="?page=tela_inicial">Pagina Inicial</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" id="tela_usuario" href="?page=cadastro_usuario">Usuário</a>
                        <a class="dropdown-item" id="tela_sistema" href="?page=cadastro_sistema">Sistema</a>
                        <a class="dropdown-item" id="tela_requisito" href="?page=cadastro_requisitos">Requisito</a>
                        <a class="dropdown-item" id="tela_tratamento" href="?page=cadastro_tratamento">Tratamento</a>       
                    </div>
                </li>
            </ul>

        </div>
    
        <a class="nav-link badge-dark bg-dark mr-5" id="botao_sair" href="#">Sair</a>

    </nav>
    <!-- fim criaçao menu-->