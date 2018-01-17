<?php
session_start();
require "ligacao.php";
if(isset($_SESSION['sessao']) && $_SESSION['sessao']=="admin"){
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
                    <li role="presentation"><a href="#recursos">Recursos</a></li>
                    <li role="presentation"><a href="#utilizadores">Utilizadores</a></li>
                    <li role="presentation"><a href="#mensagens">Mensagens</a></li>
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

                    <h1 class="wel-title">Bem vindo <?php echo $_SESSION['sessao']?></h1>
                    
                </div>
                <div class="col-sm-12 col-xl-12 hidden-md hidden-lg">
                    <h1 class="wel-title-sm2">Bem vindo Admin!</h1>
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
                <h2>Recursos</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Quantidade</th>
                            <th>Tipo</th>
                            <th>Material</th>
                            <th>Reservas</th>
                            <th>Estado</th>
                            <th>Operação</th>
                        </tr>
                    </thead>
                    <?php
    
          
                echo "<tbody>";
                                                   
                                                             
$sql = "SELECT * FROM recursos LIMIT 5 ;";
             $executar = mysqli_query($ligacao,$sql) or die("erro 2");    
                
                while($registo = mysqli_fetch_array($executar)){
                    echo "<tr>";
                

                        echo "<td>".$registo[1]."</td>";
                        echo "<td>".$registo[2]."</td>";
                        echo "<td>".$registo[3]."</td>";
                        echo "<td>".$registo[4]."</td>";
                        echo "<td>".$registo[5]."</td>";
                        echo "<td>".$registo[6]."</td>";
                        echo "<td>"."<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#remover$registo[0]'>Remover</button>
                        
                            <div class='modal fade' id='remover$registo[0]' tabindex='-1' role='dialog' aria-labelledby='Remover'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
    <h3 id='myModalLabel'>Apagar?</h3>
  </div>
                                    <div class='modal-body'>
                                        <p>Tem a certeza que quer apagar?</p>
                                    </div>
                                    <div class='modal-footer'><div class='col-md-4 col-md-offset-2'>
    <button class='btn' data-dismiss='modal' aria-hidden='true'>Cancelar</button>
    </div><div class='col-md-4'>
    <form action='apagar.php' method='post'>
    
                                        <input type='hidden' name='idrec' value='$registo[0]'/>
                                         <input type='submit' name='del' class='btn btn-warning' value='Sim'>
                                        </form></div>
  </div>
                                </div>
                            </div>
                        </div>
                            
                        
                                        
                                       "."</td>";
                    echo "";
                    
                    
                    
                    echo "</tr>";
                    }
                echo "</tbody>";
?>
                </table>
            </div>

        </div>
    </div>

</section>
   
    <section class="sq2" id="utilizadores">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Utilizadores</h2>

                </div>
                 <div class="col-lg-8 col-lg-offset-2">
                    <?php //listagem de clientes
$sql2 = "SELECT * FROM utilizadores";     
$executar2 = mysqli_query($ligacao, $sql2) or die("erro 2");
echo "<div class='table-responsive'><table class='table'>";
echo " <thead>               <tr>
                            <th>Nome</th>
                            <th>Username</th>
                            <th>Data de Registo</th>
                            <th>Tipo</th>
                            <th>Operação</th>
                        </tr>
                    </thead>";
while($registo2 = mysqli_fetch_array($executar2)){

echo "<tr>";
    echo "<td>".$registo2[1]."</td>"; //Nome
    echo "<td>".$registo2[4]."</td>"; //Username
    echo "<td>".$registo2[8]."</td>"; //Data ?>
    <td>         
        <form action='alterar.php' method='post' name='ar'>
       <select name='opcao'><?php

    if($registo2[9] == "admin"){
?>
<?php } if($registo2[9] == "admin"){ ?>
<option value="<?php echo $registo2[0].'.'.$registo2[9] ?>"> Admin </option>
<option value="<?php echo $registo2[0].'.'."registado" ?>"> Registado </option>
<option value="<?php echo $registo2[0].'.'."pendente" ?>"> Pendente </option>
<?php        
    }else if($registo2[9] == "registado"){
 ?>
<option value="<?php echo $registo2[0].'.'.$registo2[9] ?>">Registado</option>;
<option value="<?php echo $registo2[0].'.'."admin" ?>">Admin</option>;
<option value="<?php echo $registo2[0].'.'."pendente" ?>">Pendente</option>;
<?php        
    }else if($registo2[9] == "pendente"){
  ?>
<option value="<?php echo $registo2[0].'.'.$registo2[9]?>"> Pendente </option>
<option value="<?php echo $registo2[0].'.'."admin" ?>"> Admin </option>
<option value="<?php echo $registo2[0].'.'."registado" ?>"> Registado </option>
<?php       
    }else {
        ?>
        <option value="sem perfil">sem perfil</option>
        <?php
    }
?> 
</select>
            <button type="submit" class="btn btn-warning btn-sm">
          <span class="glyphicon glyphicon-refresh"></span> Atualizar
        </button>
                    
                    </form>    
        </td><?php //Tipo
    echo "<td>"."<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#remover$registo2[0]'>Remover</button>
    
                        
                        
                            <div class='modal fade' id='remover$registo2[0]' tabindex='-1' role='dialog' aria-labelledby='Remover'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
    <h3 id='myModalLabel'>Apagar?</h3>
  </div>
                                    <div class='modal-body'>
                                        <p>Tem a certeza que quer apagar?</p>
                                    </div>
                                    <div class='modal-footer'><div class='col-md-4 col-md-offset-2'>
    <button class='btn' data-dismiss='modal' aria-hidden='true'>Cancelar</button>
    </div><div class='col-md-4'>
    <form action='apagar.php' method='post'>
    
                                        <input type='hidden' name='iduser' value='$registo2[0]'/>
                                         <input type='submit' name='del' class='btn btn-warning' value='Sim'>
                                        </form></div>
  </div>
                                </div>
                            </div>
                        </div>"."</td>";
    echo "</tr>";}
    echo "</table></div>";    
?>

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
    echo "página privada do ADMIN"."<br>";
    
}


?>