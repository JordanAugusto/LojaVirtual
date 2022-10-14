<?php

session_start();

include 'conexao.php';
include 'erro.php';

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

//echo $recebe_email,'<br>';
//echo $recebe_senha,'<br>';

$consulta = $conexao->query("SELECT * FROM minhaloja.usuarios WHERE email='$recebe_email' AND senha='$recebe_senha'");

if ($consulta->rowCount()==1){

    $exibeuser=$consulta->fetch(pdo::FETCH_ASSOC);

    if ($exibeuser['adm']==0){


    $_SESSION['id']=$exibeuser['id_user'];
    $_SESSION['adm']=0;
    header("location:index.php");
    }    
    
    else {

    $_SESSION['id']=$exibeuser['id_user'];
    $_SESSION['adm']=1;
    header("location:index.php");

    }

    include 'erro.php';
}

?>