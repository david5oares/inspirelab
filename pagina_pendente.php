<?php
session_start();
require "ligacao.php";
if(isset($_SESSION['sessao'])){
$dados = explode(".", $_SESSION['sessao']);}

if (isset($dados[1]) && $dados[1] == "pendente"){
?>
<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inspire Lab - Test Page</title>

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="boostrap/css/bootstrap.css">
        <link rel="stylesheet" href="boostrap/fonts/glyphicons-halflings-regular.ttf">
        <link rel="stylesheet" href="estilos/style.css">
        <script src="scripts/processing.js"></script>




</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    

                    <canvas data-processing-sources="scripts/logo.js" id="logo-brand2"></canvas>
                        
                </div>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="logout.php" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <canvas data-processing-sources="assets/js/logo.js" class="logo-print visible-print-inline-block"></canvas>
    <!-- HEADER -->
    <div id="header" class="hidden-print">


        <div class="container welcome2 ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 hidden-sm hidden-xs ">

                    <h1 class="wel-title">Bem vindo <?php echo $dados[2]?></h1>
                    
                </div>
                <div class="col-sm-12 col-xl-12 hidden-md hidden-lg">
                    <h1 class="wel-title-sm2">Bem vindo <?php echo $dados[2]?>!</h1>
                </div>


            </div>
        </div>

    </div>

    <canvas data-processing-sources="scripts/waves.js" class="waves2 hidden-print"></canvas>

    <!-- Recursos -->
<section class="sq1" id="recursos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
               <h2>O seu registo ainda está pendente</h2>
                <h4>Aguarde pela confirmação do administrador</h4>
                <br>
                
</div>
<div class="col-lg-8 col-lg-offset-2">
    <form action='apagar.php' method='post'>

        <input type='hidden' name='iduser2' value=<?php echo $dados[0]; ?> />
        <input type='submit' name='del' class='btn btn-danger' value='Apagar Registo'>
    </form>
<a href="logout.php" class="btn btn-info" role="button">Voltar à pagina inicial</a>

</div>

        </div>
    </div>

</section>
   
    

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Powered by Jquery 3.2.1, Bootstrap 3.3.7 and processing.js </h4>
                </div>
                <div class="col-sm-6">
                    <h5>David Soares & Sofia Fereira © 2018</h5>
                </div>
            </div>
        </div>
    </footer>
<button id="back-to-top" class="btn btn-large"><span class="glyphicon glyphicon-arrow-up"></span></button>
    <!-- Scripts Externos-->
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/smoth.scroll.js"></script>
        <script src="boostrap/js/bootstrap.min.js"></script>


</body>

</html>

<?php    
}else{
    echo "página privada do Pendente"."<br>";
    
}


?>