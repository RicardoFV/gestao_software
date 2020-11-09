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
        let formulario = {}
            // valida os campos antes de inserir
        if (validarCampos(nome, email, senha, repetir_senha) == true) {
            formulario = {
                acao: acao,
                nome: nome,
                email: email,
                perfil: perfil,
                situacao: situacao,
                senha: senha
            }
        }
        // requisição 
        $.ajax({
            type: 'post',
            url: url_base_casa + '/ControllerUsuario.php',
            dataType: 'json',
            data: formulario,
            success: dados => {
                console.log(dados)
                $('#mensagem').html('Cadastro Realizado com Sucesso!')

            },
            error: dados => {
                console.log(dados)
            }
        })
    })

})

// valida os campos 
function validarCampos(nome, email, senha, repetir_senha) {
    let valido = true
    if (nome == '') {
        alert('Campo Nome , precisa ser preenchido')
        valido = false
    }

    if (email == '') {
        alert('Campo E-mail , precisa ser preenchido')
        valido = false
    }

    if (senha != repetir_senha || repetir_senha != senha) {
        alert('Senhas são diferentes')
        valido = false
    }

    return valido

}