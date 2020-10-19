// criando o arquivo java script , jquery
$(document).ready(() => {

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

})