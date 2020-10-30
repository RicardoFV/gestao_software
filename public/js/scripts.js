// criando o arquivo java script , jquery
$(document).ready(() => {
    // url base do sistema 
    let url_base = 'http://localhost/gestao_software/app/controller'
        // botao que especifica a acao
    let acao = ''

    // clique no botão cadastro de sistema
    $('body').on('click', '#tela_sistema', () => {
        $.post('public/views/cadastros/sistema.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão cadastro de requisito
    $('body').on('click', '#tela_requisito', () => {
        $.post('public/views/cadastros/requisitos.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão cadastro de tratamento
    $('body').on('click', '#tela_tratamento', () => {
        $.post('public/views/cadastros/tratamento.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão cadastro de usuario
    $('body').on('click', '#tela_usuario', () => {
        $.post('public/views/cadastros/usuario.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão pagina inicial
    $('body').on('click', '#pagina_inicial', () => {
        $.post('public/views/principal/home.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão para acessar o sistema , atravez de usuario e senha
    $('body').on('click', '#acessar_sistema', (e) => {
        e.preventDefault()
        $.get('public/views/principal/home.php', data => {
            $('#conteudo_principal').html(data)
        })
    })

    // clique no botão sair 
    $('body').on('click', '#botao_sair', () => {
        $.post('index.php', (data) => {
            $('body').html(data)
        })
    })

    // botão para cadastrar usuario 
    $('body').on('click', '#btn_cadastrar_usuario', (e) => {
        e.preventDefault()
        acao = 'cadastrar'
        let nome = $('#nome').val()
        let email = $('#email').val()
        let perfil = $('#perfil').val()
        let situacao = $('#situacao').val()
        let senha = $('#senha').val()
        let repetir_senha = $('#repetir_senha').val()

        let formulario = {
            aco: acao,
            nome: nome,
            email: email,
            perfil: perfil,
            situacao: situacao,
            senha: senha,
            repetir_senha: repetir_senha
        }

        console.log(formulario)
            // requisição 
        $.ajax({
            type: 'post',
            url: url_base + '/ControllerUsuario.php',
            dataType: 'json',
            data: {},
            success: function() {

            },
            error: function() {

            }
        })
    })

})