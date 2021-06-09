<?php

	require ('conecta.php');

	$data="";
	$hora="";
	$local="";
	$eventos="";
	$atividades="";

	if(isset($_POST["editar"])){

		$codigo = htmlentities($_POST["editar"]);
		$query=$mysqli->query("select * from  agenda where codigo = '$codigo'");

		$agenda		=	$query->fetch_assoc();
		$data		=	$agenda["data"];
		$hora		=	$agenda["hora"];	
		$local		=	$agenda["local"];
		$eventos 	=	$agenda["eventos"];	
		$atividades =	$agenda["atividades"];	
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>

	<form method="POST" action="editar.php">

		<input type="hidden" name="codigo" value="<?php echo $codigo ?>">

		Data: <input type="text" name="data" value="<?php echo $data ?>"><br/><br/>

		Hora: <input type="text" name="hora" value="<?php echo $hora ?>"><br/><br/>

		Local: <input type="text" name="local" value="<?php echo $local ?>"><br/><br/>

		Eventos: <input type="text" name="eventos" value="<?php echo $eventos ?>"><br/><br/>	

		Atividades: <input type="text" name="atividades" value="<?php echo $atividades ?>"><br/><br/>		
	
</form>
<input type="submit" class="btn btn-primary" value="Salva" name="salva">
&nbsp;&nbsp;
<a href="../../Desafio/php/parte2.php" class="btn btn-success">Voltar</a>
</body>
</html>


<?php 

	if(isset($_POST["salva"])){

		$data   	= htmlentities($_POST["data"]);
		$hora 		= htmlentities($_POST["hora"]);
		$local  	= htmlentities($_POST["local"]);
		$eventos 	= htmlentities($_POST["eventos"]);
		$atividades = htmlentities($_POST["atividades"]);
	

		$mysqli->query("update agenda set data = '$data', hora='$hora', eventos='$eventos', atividades='$atividades' where codigo = '$codigo'  ");

		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "ALTERADO COM SUCESSO";
		}
	}

?>


