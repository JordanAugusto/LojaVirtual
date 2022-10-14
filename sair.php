<?php
//quando o usuario clicar em sair

session_start();

session_destroy();
header('location:index.php');

?>