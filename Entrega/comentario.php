<?php 
require "ligacao.php";

if(isset($_POST['idreq'])){

$a = $_POST['idreq'];
$b = $_POST['comment'];
$c = $_POST['options'];
$d = $_POST['user'];
$e = $_POST['user_name'];    
$sql = "INSERT INTO `comentarios` (`id_com`, `comentario`, `pontos`, `recurso`, `user`, `user_name` ) VALUES ('', '$b ', '$c', '$a', '$d', '$e')";       ;
$executa = mysqli_query($ligacao,$sql) or die ("erro 5");
 header('location: pagina_registado.php');
       
} else {
    echo "Erro5";
    header( "Refresh:3; url=index.php", true, 303);
}

?>