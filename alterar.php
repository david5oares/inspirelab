<?php //actualizarRegistro.php
//protejer o conteudo da pagina : sessoes
session_start();
require "ligacao.php";

if(isset($_SESSION['sessao']) && $_SESSION['sessao']=="admin"){

$dados = $_POST['opcao'];
$listarDados = explode('.', $dados);
echo "id:".$listarDados[0]."<br>";
echo "tipo:".$listarDados[1]."<br>";
       
$tipo = $listarDados[1];
$id = $listarDados[0];

$sql = "UPDATE utilizadores SET user_type='$tipo' WHERE id_user='$id'";       ;
$executa = mysqli_query($ligacao,$sql) or die ("erro 5");
 header('location: pagina_admin.php#utilizadores');
       
}else{
       echo "pagina privada".$_SESSION['sessao'];
}


?>