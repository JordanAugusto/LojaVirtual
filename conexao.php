<?php
// conexao com o banco
try{

	$conexao = new PDO('mysql:host-localhost;dbname-minhaloja','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'));
	$conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
	echo 'Erro na conexao,'.$e->getMessage().'</br>';
	echo 'Codigo do erro:' .$e->getCode();	

}//tratamento de erros

	
?>