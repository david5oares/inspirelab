<?php
//registo.php
require"ligacao.php";
print_r(getdate());
$a = $_POST['d1'];
$b = $_POST['d2'];
$c = $_POST['d3'];
$d = $_POST['d5'];
$e = $_POST['d4'];
$f = $_POST['d6'];
$g = $_SERVER['REMOTE_ADDR'];
$h = date("Y-m-d H:i:s");
$i = "pendente";
$j = "0";
if($a != "" && $b != "" && $c != "" && $d != "" && $e != "" && $f != ""){    

$sql="INSERT INTO utilizadores VALUES('','$a','$b','$c','$d','$e' ,'$f' ,'$g','$h' ,'$i', '$j')";
$executar=mysqli_query($ligacao,$sql) or die("erro 3");

//animação a dizer ok! (html/jQuery)
    header('location: index.php');
}else{
//animação a dizer volte a tentar
echo "Tem campos por preencher. Volte a tentar.";
}
?>