<?php
require "ligacao.php";

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
        <div id="up"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link " href="#">
                    

                    <canvas data-processing-sources="scripts/logo.js" id="logo-brand"></canvas>
                        
                </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="#sobre">Sobre</a></li>
                        <li role="presentation"><a href="#recursos">Recursos</a></li>
                        <li role="presentation"><a href="#galeria">Galeria</a></li>
                        <li role="presentation"><a href="#contactos">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <canvas data-processing-sources="assets/js/logo.js" class="logo-print visible-print-inline-block"></canvas>
        <!-- HEADER -->
        <div id="header" class="hidden-print">


            <div class="container welcome ">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 hidden-sm hidden-xs ">

                        <h1 class="wel-title">Bem vindo! Este é o <i>InspireLab</i><br>um FabLab criado para si
                            <br>boas ideias - um bom ambiente</h1>
                        <p class="text-center"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                    </div>
                    <div class="col-sm-12 col-xl-12 hidden-md hidden-lg">
                        <h1 class="wel-title-sm">Bem vindo! Este é o <i>InspireLab</i><br>um FabLab criado para si
                            <br>boas ideias - um bom ambiente</h1>
                    </div>


                </div>
            </div>

        </div>
        <!-- Processing Waves Banner -->
        <canvas data-processing-sources="scripts/waves.js" class="waves hidden-print"></canvas>
        <!-- SOBRE-->
        <section class="fundo-sobre" id="sobre">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="titulo">Quem Somos?</h2>
                        <hr class="linha-branca hidden-print">
                        <p>
                            Somos um FabLab, isto é, um espaço tipicamente equipado com uma série de ferramentas flexíveis controladas por computador que cobrem várias escalas de comprimento diferentes e vários materiais, com o objetivo de fazer "quase qualquer coisa". Isso inclui produtos habilitados para tecnologia, geralmente percebidos como limitados à produção em massa.
                        <!-- Registo & Login-->
                        </p>
                        <a class="btn btn-default btn-md botao hidden-print" data-toggle="modal" data-target="#registomodal">Começar!</a>
                        <a class="btn btn-default btn-md botao hidden-print" data-toggle="modal" data-target="#loginmodal">Já tens conta?</a>


                        <!-- Modal registo -->
                        <div class="modal fade" id="registomodal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Regista-te</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-group" name="registaruser" action="registo.php" method="post">
                                            Primeiro Nome <input type="text" name="d1" class="form-control"> 
                                            Ultimo Nome <input type="text" name="d2" class="form-control"> 
                                            Telemóvel <input type="text" name="d3" class="form-control"> 
                                            Email <input type="email" name="d4" class="form-control"> 
                                            Username <input type="text" name="d5" class="form-control"> 
                                            Password <input type="password" name="d6" class="form-control">
                                            <br>
                                            <input type="submit" value="registar" class="btn btn-primary">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Modal login -->
                        <div class="modal fade" id="loginmodal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-group" name="registaruser" action="sessao.php" method="post">
                                            Username <input type="text" name="l1" class="form-control"> Password: <input type="text" name="l2" class="form-control">
                                            <br>
                                            <input type="submit" value="login" class="btn btn-default">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Recursos da BD -->
        <section class="sq1" id="recursos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Recursos Disponiveis</h2>
                        <table class="table table-hover">



                            <thead>
                                <tr>
                                    <th>Modelo</th>
                                    <th>Quantidade</th>
                                    <th>Tipo</th>
                                    <th>Material</th>
                                </tr>
                            </thead>
                            <?php
$sql = "SELECT * FROM recursos";
                $executar = mysqli_query($ligacao,$sql) or die("erro 2");
                echo "<tbody>";
                while($registo = mysqli_fetch_array($executar)){
                    echo "<tr>";
                        echo "<td>".$registo[1]."</td>";
                        echo "<td>".$registo[2]."</td>";
                        echo "<td>".$registo[3]."</td>";
                        echo "<td>".$registo[4]."</td>";
                    echo "</tr>";
                    
                    
                    
                }
                echo "</tbody>";
?>



                        </table>
                    </div>

                </div>
            </div>

        </section>
        <!-- Galeria c/Boostrap Modals-->
        <section class="sq2" id="galeria">
            <div class="container">
                <div class="row">
                    <h2>Galeria</h2>
                    <div class="col-lg-2 col-lg-offset-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image1.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image1.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image2.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image3.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image3.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image4.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image4.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-lg-2 col-lg-offset-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image5.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image6.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image6.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image7.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image7.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img class="img-thumbnail" alt="Responsive image" src="midia/image8.jpg" data-toggle="modal" data-target="#imagem1">
                        <div class="modal fade" id="imagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" alt="Responsive image" src="midia/image8.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contactos -->
        <section class="sq3" id="contactos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Contactos</h2>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                        <form action="/action_page.php">
                            <div class="form-group ">
                                <label for="email">Endereço de email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="comment">Mensagem:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">  Não sou um robot!</label>
                            </div>
                            <button type="submit" class="btn btn-default">Submeter</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDwmzuJwjd1UwgMRXMdhnjuUdtFyjyNY4Y'></script>
                        <div style='overflow:hidden;height:300px;width:100%;border-radius: 20px;'>
                            <div id='gmap_canvas' style='height:300px;width:100%;'></div>
                            <style>
                                #gmap_canvas img {
                                    max-width: none!important;
                                    background: none!important
                                }

                            </style>
                        </div> <a href='https://embed-map.org/'>google maps html widget</a>
                        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3f0c56ed8537fa90fccf8ef74bd593745ba3e938'></script>
                        <script type='text/javascript'>
                            function init_map() {
                                var myOptions = {
                                    zoom: 14,
                                    center: new google.maps.LatLng(40.54125579999999, -7.281516499999952),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(40.54125579999999, -7.281516499999952)
                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: '<strong>InspireLab</strong><br>IPG<br> Guarda<br>'
                                });
                                google.maps.event.addListener(marker, 'click', function() {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }
                            google.maps.event.addDomListener(window, 'load', init_map);

                        </script>

                        <div class="col-lg-8">
                            <h3><span class="glyphicon glyphicon-envelope"></span><b>Email: </b> inspirelab@gmail.com </h3>
                            <h3><span class="glyphicon glyphicon-phone"></span><b>Telefone: </b> 911281230</h3>
                        </div>
                        <div class="col-lg-4 social">
                            <a target="_blank" href="http://www.facebook.com/inspirelab" type="alt_get">
                                <h3><span class="glyphicon glyphicon-thumbs-up"></span>Facebook</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Footer -->
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
