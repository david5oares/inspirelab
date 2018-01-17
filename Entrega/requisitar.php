<?php //actualizarRegistro.php
//protejer o conteudo da pagina : sessoes
require "ligacao.php";

if(isset($_POST['idreq'])){

$a = $_POST['idreq'];
$b = $_POST['srt_date'];
$c = $_POST['end_date'];
$d = $_POST['user'];
$sql = "UPDATE `recursos` SET `reserva_user` = '$d', `start_date` = '$b', `end_date` = '$c' WHERE `recursos`.`id_rec` = $a ";       ;
$executa = mysqli_query($ligacao,$sql) or die ("erro 5");
 header('location: pagina_registado.php');
       
} else {
    echo "Erro5";
    header( "Refresh:3; url=index.php", true, 303);
}

?>