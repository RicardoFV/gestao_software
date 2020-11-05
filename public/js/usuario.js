// criando o arquivo java script , jquery
$(document).ready(() => {

    // url base do sistema 
    let url_base_casa = 'http://localhost/projetos/gestao_software/projeto/app/controller'
    let url_base_trabalho = 'http://localhost/projetos/gestao_software/app/controller'
        // botao que especifica a acao
    let acao = ''

    // botão para cadastrar usuario 
    $('body').on('click', '#btn_cadastrar_usuario', (e) => {
        e.preventDefault()
        acao = 'cadastrar'
        let nome = $('#nome').val()
        let email = $('#email').val()
        let perfil = $('#perfil option:selected').val()
        let situacao = $('#situacao').is(':checked');
        let senha = $('#senha').val()
        let repetir_senha = $('#repetir_senha').val()

        let formulario = {
            acao: acao,
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
            url: url_base_trabalho + '/ControllerUsuario.php',
            dataType: 'json',
            data: formulario,
            success: dados => {
                console.log(dados)
            },
            error: dados => {
                console.log(dados)
            }
        })
    })



})