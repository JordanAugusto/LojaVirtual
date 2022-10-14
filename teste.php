<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
	include 'conexao.php';
	
	$consulta = $conexao->query('SELECT * FROM minhaloja.produtos');
	
	while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){	
	
	echo $exibe['marca'].'<br>';
	echo $exibe['Produto'].'<br>';
	echo $exibe['descriçao'].'<br>';
	echo $exibe['departamento'].'<br>';
	echo $exibe['foto1'].'<br>';
		
	}
	?>
</body>
</html>