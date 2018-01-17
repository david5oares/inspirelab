<?php
require "ligacao.php";
$a = $_POST['l1'];
$b = $_POST['l2'];


if($a != "" && $b != ""){
//operaçoes para procurar o login e a pass na tabela de clientes
    $sql="SELECT * from utilizadores where username='$a' AND password='$b'";
    //nota: nao podem existir dois registos iguais, dois login repetidos
    $executar = mysqli_query($ligacao,$sql) or die ("erro4");
    $registo= mysqli_fetch_array($executar);
    //vector -> _|_|_| tipo está na posição 5
    if($a == $registo[4] && $b == $registo[6]){
        
    if($registo[9] == "admin"){
      echo"Bem Vindo ADMIN com o nome".$registo[1]."<br>";  
        session_start();
        $_SESSION['sessao']= $registo[9];
        header('location: pagina_admin.php');
        
        
    }else if ($registo[9] == "registado"){
      echo" Bem vindo USER com o nome ".$registo[1]."<br>";
            session_start();
            $_SESSION['sessao']= $registo[0].".".$registo[9].".".$registo[1]; //estamos a atribuir ao nome da sessao : o id do utilizador e o tipo de utilizador, separados com um ponto final
            header('location: pagina_registado.php');
    
        
        
    }else if($registo[9] == "pendente"){
        session_start();
        $_SESSION['sessao']= $registo[0].".".$registo[9].".".$registo[1];
        header('location: pagina_pendente.php');
    }
    
    }else{
        
        echo"tem que se registar"."<br>";
        echo $registo[9]."<br>";
    }
    
    
    
}else {
    //animaçao a dizer volte a tentar (html, jquery)
        echo "login/password errados. volte a tentar";   
}

?>