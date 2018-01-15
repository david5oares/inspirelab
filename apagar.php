<?php
   require "ligacao.php";

//Apagar um recurso
if(isset($_POST ['idrec'])){
    $apagar_rec =$_POST ['idrec'];
$sql="DELETE FROM recursos WHERE id_rec = ('$apagar_rec')";
 $executa = mysqli_query($ligacao, $sql);
    header('location: pagina_admin.php#recursos');
}
//Apagar um Utilizador
  if(isset($_POST ['iduser'])){
      $apagar_user =$_POST ['iduser'];
$sql="DELETE FROM utilizadores WHERE id_user = ('$apagar_user')";
 $executa = mysqli_query($ligacao, $sql);
      header('location: pagina_admin.php#utilizadores');
  } 
if(isset($_POST ['iduser2'])){
      $apagar_user =$_POST ['iduser2'];
$sql="DELETE FROM utilizadores WHERE id_user = ('$apagar_user')";
 $executa = mysqli_query($ligacao, $sql);
     header('location: index.php');
  } 

?> 
