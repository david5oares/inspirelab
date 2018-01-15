<?php
session_start();
require "ligacao.php";
$dados = explode(".", $_SESSION['sessao']);

//echo "-->".dados[0]."<br>"; //id
//echo "-->".dados[1]."<br>"; //tipo de utilizador
if (isset($dados[1]) && $dados[1] == "registado"){
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

                    <h1 class="wel-title">Bem vindo <?php echo $dados[2]?></h1>
                    
                </div>
                <div class="col-sm-12 col-xl-12 hidden-md hidden-lg">
                    <h1 class="wel-title-sm2">Bem vindo <?php echo $dados[2]?>!</h1>
                </div>


            </div>
        </div>

    </div>

    <canvas data-processing-sources="scripts/waves.js" class="waves2 hidden-print"></canvas>

    <!-- User -->
<section class="sq1" id="recursos">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-8 col-lg-offset-2">
                <button href="" class="btn btn-default btn-lg user_gly" data-toggle="modal" data-target="#dados">
          <span class="glyphicon glyphicon-user"></span> 
        </button>
                

                <a href="" data-toggle="modal" data-target="#dados"> <h4 id="dadosh4">Dados Pessoais</h4></a>
               
      <!-- MODAL DADOS DE UTILIZADOR -->         
               
             <div class="modal fade" id="dados" tabindex="-1" role="dialog" aria-labelledby="requisitar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Dados Pessoais</h3>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
       <!-- FIM DE MODAL DADOS DE UTILIZADOR -->           
</div>
        </div>
    </div>
    </section>
            
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
                            <th>Comentarios</th>
                        </tr>
                    </thead>
                    <?php
    
          
                echo "<tbody>";
                                                
                                                             
$sql = "SELECT * FROM recursos;";
$sql2 = "SELECT * FROM comentarios;";
             $executar = mysqli_query($ligacao,$sql) or die("erro 2");    
                $executar2 = mysqli_query($ligacao,$sql2) or die("erro 2");
                while($registo = mysqli_fetch_array($executar)){
                    echo "<tr>";
                

                        echo "<td>".$registo[1]."</td>";
                        echo "<td>".$registo[2]."</td>";
                        echo "<td>".$registo[3]."</td>";
                        echo "<td>".$registo[4]."</td>";
                        echo "<td>".$registo[5]."</td>";
                        echo "<td>".$registo[6]."</td>";
                        echo "<td>"."<button type='button' class='btn btn-success' data-toggle='modal' data-target='#requisitar$registo[0]'>Requisitar</button>
                        
                            <div class='modal fade' id='requisitar$registo[0]' tabindex='-1' role='dialog' aria-labelledby='requisitar'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
    <h5 id='myModalLabel'>Escolha a data de Inicio e Fim da requisição!</h5>
  </div>
                                    <div class='modal-body'>
                                        <form action='requisitar.php' method='post' >
                                        <div class='form-group'><input type='hidden' name='user' value='$dados[0]'/><input type='hidden' name='idreq' value='$registo[0]'/>
                                        </div>
                                        <div class='form-group'>
                                        <label for='exampleInputFile'>Data de Inicio </label> <input type='date' name='srt_date' value=''/></div>
                                        <div class='form-group'><label for='exampleInputFile'>Data do Fim</label> <input type='date' name='end_date' value=''/></div>
                                    </div>
                                    <div class='modal-footer'><div class='col-md-4 col-md-offset-2'>
    <button class='btn' data-dismiss='modal' aria-hidden='true'>Cancelar</button>
    </div><div class='col-md-4'>
    
                                        
                                         <input type='submit' name='del' class='btn btn-success' value='Sim'>
                                        </form></div>
  </div>
                                </div>
                            </div>
                        </div>
                            
                        
                                        
                                       "."</td>";
                    
                    //--------------------------Mensagens
                    
                    
                     ?>
<td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#comentarios<?php echo $registo[0];?>">Comentarios</button>

    <div class="modal fade" id="comentarios<?php echo $registo[0];?>" tabindex="-1" role="dialog" aria-labelledby="requisitar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Comentários</h3>
                </div>
                <div class="modal-body">

                    <form action="comentario.php" method="post">
                        <input type="hidden" name="user" value="<?php echo $dados[0];?>" />
                        <input type="hidden" name="idreq" value="<?php echo $registo[0];?>" />
                        <input type="hidden" name="user_name" value="<?php echo $dados[2];?>" />
                        
                        
                        <label for="comment">Classifique:</label><br>
                          <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="1">
    <input type="radio" name="options" value="1" autocomplete="off" > <span class="glyphicon glyphicon-star-empty unchecked"></span> <span class="glyphicon glyphicon-star checked"></span>
  </label>
                                <label class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="2">
    <input type="radio" name="options" value="2" autocomplete="off" checked> <span class="glyphicon glyphicon-star-empty unchecked"></span> <span class="glyphicon glyphicon-star checked"></span>
  </label>
                                <label class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="3">
    <input type="radio" name="options" value="3" autocomplete="off" checked> <span class="glyphicon glyphicon-star-empty unchecked"></span> <span class="glyphicon glyphicon-star checked"></span>
  </label>
                                <label class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="4">
    <input type="radio" name="options" value="4" autocomplete="off" checked> <span class="glyphicon glyphicon-star-empty unchecked"></span> <span class="glyphicon glyphicon-star checked"></span>
  </label>
                                <label class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="5">
    <input type="radio" name="options" value="5" autocomplete="off" checked> <span class="glyphicon glyphicon-star-empty unchecked"></span> <span class="glyphicon glyphicon-star checked"></span>
  </label>
                              
                              
                              
                               
                            </div>
                        <div class="form-group">
                            
                            <label for="comment">Insira aqui o seu comentário: </label>
                            <div class="container">
                            <div class="row">
                          <div class="col-md-10">
                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea> </div>
                            <div class="col-md-2">
                                <button type="submit" name="del" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                <br><br>
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Sair</button>
                    </div>
                           </div> </div>
                        </div>
                        
                        
                      </form>  
                </div>
                <div class="modal-footer">
                    <?php 
                   $recId = $registo[3];
                $userId = (mysqli_query('Select * from recursos where id_rec = $recId')) ;   
                        $registo2 = mysqli_fetch_array($registo2);
                   while($registo = mysqli_fetch_array($userId)){
                        echo "<h4>".$registo2[4].$registo2[5]."</h4>";
                        echo "<div class='container-fluid'>";
                        echo "<div class='row '>";
                        echo "<div class='col-md-8'>";
                        echo "<h4 class='text-left'>$registo2[5]</h4>";
                         echo "</div>";
                        echo "<div class='col-md-4'>";
                        if($registo2[2]==1){ echo "<h5 class='center-block'>$registo2[2]
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                          </h5>"
                            ;}
                        else if($registo2[2]==2){ echo "<h5 class='center-block'>$registo2[2]  
                        <span class='glyphicon glyphicon-star '></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                          </h5>";}
                        else if($registo2[2]==3){ echo "<h5 class='center-block'>$registo2[2]  
                        <span class='glyphicon glyphicon-star '></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                          </h5>";}
                        else if($registo2[2]==4){ echo "<h5 class='center-block'>$registo2[2]  <span class='glyphicon glyphicon-star '></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
                          </h5>";}
                        else if($registo2[2]==5){ echo "<h5 class='center-block'>$registo2[2]  <span class='glyphicon glyphicon-star '></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                          </h5>";}
                        echo "</div></div>";
                        echo  "<div class='row'>";
                        echo "<div class='col-md-12'>";
                        echo "<p class='text-left'>$registo2[1]</p>";
                        echo "</div>";
                       echo "</div>";
                        echo "</div></div>";
                        
                    } 
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</td>




                        <?php
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
    echo "página privada do Registado".$_SESSION['sessao']."<br>";
    
}


?>