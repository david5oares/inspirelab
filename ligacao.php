<?php
$servidor = "localhost";
$utilizador = "root";
$pass = "";
$baseDados = "inspirelab";
//$utilizador = "admin_inspire";
//$pass = "admin+mysql123";

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
}

if (strlen(strstr($agent, 'Firefox')) > 0) {
    $ligacao = mysqli_connect($servidor,$utilizador,$pass,$baseDados) or die("erro 1");
mysqli_set_charset($ligacao,"utf8");
} else { exit("


<h2>Browser nao compativel! Por favor use a ultima versao do Mozilla Firefox!</h2>");
       }
?>