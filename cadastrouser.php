<?php
// receber formulario de cadatro 

include "conexao.php";

$recebe_nome = $_POST['nome'];
$recebe_sobrenome = $_POST['sobrenome'];
$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];
$recebe_cidade = $_POST['cidade'];
$recebe_cep = $_POST['cep'];
$recebe_endereco = $_POST['endereco'];

//Paramentro para verificar se esta recebendo os dados:
//echo $recebe_nome,'<br>';
//echo $recebe_sobrenome,'<br>';
//echo $recebe_email,'<br>';
//echo $recebe_senha,'<br>';
//echo $recebe_cidade,'<br>';
//echo $recebe_cep,'<br>';
//echo $recebe_endereco,'<br>';

// Verificar si o usuario ja tem cadastro:

$consulta = $conexao->query("SELECT email From minhaloja.usuarios where email='$recebe_email'");

// verificar si ja tem cadastro ou nao 
$exibe=$consulta->fetch(PDO::FETCH_ASSOC);
    if ($consulta->rowCount()==1) {

        header('recuperasenha.php'); //tem cadastro
    } else {
        echo 'O usuario poderar ser salvo'; //nao tenha cadastro
    }

?>