<?php 
    include_once './public/views/principal/cabecalho.php';

?>

<?php 
    $page ='';
    if(isset($_GET['page']) ){
        $page = $_GET['page'];
        // coloca o menu nas telas , menus na de logim
        include_once './public/views/principal/menu.php';
    }else{
        include_once './public/views/acesso/login.php';
    }
    
    switch($page){
        case 'cadastro_usuario':
            include_once './public/views/cadastros/usuario.php';
        break;

        case 'cadastro_tratamento':
            include_once './public/views/cadastros/tratamento.php';
        break;

        case 'cadastro_sistema':
            include_once './public/views/cadastros/sistema.php';
        break;

        case 'cadastro_requisitos':
            include_once './public/views/cadastros/requisitos.php';
        break;

        case 'tela_inicial':
            include_once './public/views/principal/home.php';
        break;

        default:
            include_once './public/views/acesso/login.php';
        break;
    }   
?>
<body>
<div id="conteudo"> <!-- conteudo -->


<?php 
    include_once './public/views/principal/rodape.php';

?>