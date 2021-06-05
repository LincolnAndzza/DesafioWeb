<?php

if (isset($_POST["confirma"])){

	$data =$_POST["data"];
	$hora =$_POST["hora"];
	$local=$_POST["local"];
	$eventos =$_POST["eventos"];
	$atividades =$_POST["atividades"];
	$erro = 0;

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

	<fieldset>

   		<h4>Agenda de Eventos</h4></br>

	   		<form action="index.php" class="row g-3" method="post"> 

				<div class="col-md-6">
					<label for="inputData4" class="form-label">Data</label>
					<input type="Data" class="form-control" id="inputData4" name="data">
					
				 </div>

			    <div class="col-md-6">
			        <label for="inputHora4" class="form-label">Hora</label>
			        <input type="Hora" class="form-control" id="inputHora4" name="hora">

			 	 </div>

				 <div class="col-12">
				    <label for="inputLocal4" class="form-label">Local</label>
				    <input type="Local" class="form-control" id="inputLocal4" name="local">
				 </div>

				 <div class="col-12">
				   	<label for="inputEventos4" class="form-label">Eventos</label>
				    <input type="Eventos" class="form-control" id="inputEventos4" name="eventos">
				 </div>

				 <div class="col-md-6">
				    <label for="inputAtividades4" class="form-label">Atividades</label>
				    <input type="Atividades" class="form-control" id="inputAtividades4" name="atividades">
				</div>

				</br></br>

		    	<div class="col-md-12">
				 	<a href="php/parte2.php" class="btn btn-primary">Confirma</a>
				   &nbsp;&nbsp;
				   <button type="submit" class="btn btn-primary">Apaga</button>
 				</div>
	    	</form>

		</fieldset>
	</body>
</html>

