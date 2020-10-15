// criando o arquivo java script , jquery
$(document).ready(() => {

    // clique no botão cadastre-se 
    $('body').on('click', '#link-cadastre-se', () => {
        $.post('public/views/cadastros/usuario.php', data => {
            $('#conteudo_principal').html(data)
        })
    })
})