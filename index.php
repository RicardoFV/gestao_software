<?php 
    include_once './public/views/principal/cabecalho.php';

?>

<?php 
    $page ='';
    if(isset($_GET['page']) ){
        $page = 'page';
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

    }
?>



<?php 
    include_once './public/views/principal/rodape.php';

?>