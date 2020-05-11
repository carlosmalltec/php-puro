<?php 
 // RESPONSÁVEL POR INCLUIR MANIPULADORES, CONEÇÃO COM BD, MÉTODOS, CLASSES DE HELP, FORMATAÇÃO
require '_app/Config.inc.php';
$get = filter_input(INPUT_GET, 'exe', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Sistema de cadastro de devedores">
    <meta name="keywords" content="PHP, PHPOO,MySQL,HTML,CSS,XML,JavaScript">
    <meta name="author" content="Carlos Santos carlosmalltec@gmail.com, malltec.com.br">
    <title>Sistema de cadastro de devedores </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    
</head>

<body>
    <div class="container">
        <?php include '_inc/head_menu.php'; /* MENU */ ?>
        <?php include '_inc/banner.php'; /* BANNER */ ?>
        <?php 
              /* QUERY STRING*/              
              if(!empty($get)){
                $includepatch = __DIR__.'//_paginas//'.strip_tags(trim($get).'.php');
              }else{
                $includepatch = __DIR__.'//_paginas//home.php';
              }

              if (file_exists($includepatch)) {
                require($includepatch);
              }else{
                echo '<div class="alert alert-light" role="alert">
                        Não foi possível incluir o arquivo/página <b>'.$get.'</b>, por favor fale com nosso <a href="#" class="alert-link"> suporte</a>  
                      </div>';          
              }
            ?>
        <?php include '_inc/rodape.php'; /* RODAPÉ */ ?>
        <?php include '_inc/modal.php'; /* MODAL COM FORMULÁRIO DE CADASTRO */ ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="_assets/helpers/helper.js"></script>
    <script src="_assets/cliente/cadastro.js"></script>
    <script src="_assets/cliente/view.js"></script>
    <script src="_assets/cliente/update.js"></script>
    <script src="_assets/cliente/delete.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <script src="_assets/js/jquery.maskedinput.js"></script>    
    <script type="text/javascript">
        $(document).ready(function(){
              $("#valor").maskMoney({decimal:",", thousands:"."});
              $("#telefone").mask("(99) 9999-99999", { autoclear: false });
              $("#cpf").mask("999.999.99-99", { autoclear: false });
              $("#cnpj").mask("99.999.999/9999-99", { autoclear: false });
              // $("#datanascimento").mask("99/99/9999", { autoclear: false });
        });
        
    </script>
  </body>

</html>