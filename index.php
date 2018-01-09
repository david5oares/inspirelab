<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspire Lab - Test Page</title>

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/processing.js"></script>



</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link " href="#">
                    

                    <canvas data-processing-sources="assets/js/logo.js" id="logo-brand"></canvas>
                        
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

    <canvas data-processing-sources="assets/js/waves.js" class="waves hidden-print"></canvas>

    <!-- SOBRE -->
    <section class="fundo-sobre" id="sobre">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="titulo">Quem Somos?</h2>
                    <hr class="linha-branca hidden-print">
                    <p>
                        Somos um FabLab, isto é, um espaço tipicamente equipado com uma série de ferramentas flexíveis controladas por computador que cobrem várias escalas de comprimento diferentes e vários materiais, com o objetivo de fazer "quase qualquer coisa". Isso inclui produtos habilitados para tecnologia, geralmente percebidos como limitados à produção em massa.

                    </p>
                    <a href="registo.php" class="btn btn-default btn-md botao hidden-print">Começar!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sq1" id="recursos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Recursos Disponiveis</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>
    <section class="sq2" id="galeria">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Galeria</h2>

                </div>

            </div>
        </div>

    </section>
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
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDwmzuJwjd1UwgMRXMdhnjuUdtFyjyNY4Y'></script><div style='overflow:hidden;height:300px;width:100%;border-radius: 20px;'><div id='gmap_canvas' style='height:300px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embed-map.org/'>google maps html widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3f0c56ed8537fa90fccf8ef74bd593745ba3e938'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.54125579999999,-7.281516499999952),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.54125579999999,-7.281516499999952)});infowindow = new google.maps.InfoWindow({content:'<strong>InspireLab</strong><br>IPG<br> Guarda<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    
                    <div class="col-lg-8">
                    <h3><span class="glyphicon glyphicon-envelope"></span><b>Email: </b> inspirelab@gmail.com </h3>
                    <h3><span class="glyphicon glyphicon-phone"></span><b>Telefone: </b> 911281230</h3></div>
                    <div class="col-lg-4 social">
                    <a target="_blank" href="http://www.facebook.com/inspirelab" type="alt_get"><h3><span class="glyphicon glyphicon-thumbs-up"></span>Facebook</h3></a></div>
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/smoth.scroll.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>