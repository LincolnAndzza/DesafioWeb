<?php
session_start();
$erro_local = "";
$erro_eventos = "";
$erro = 0;

if (isset($_POST["confirma"])) {
	$_SESSION["data"] 		=$_POST['data'];
	$_SESSION["hora"]		=$_POST['hora'];
	$_SESSION["local"]		=$_POST['local'];
	$_SESSION["eventos"] 	=$_POST['eventos'];
	$_SESSION["atividades"] =$_POST['atividades'];
		

	if ($_SESSION["local"] == "") {
		$erro_local = "<span style='color:blue'>Preencha o campo</span>";
		$erro ++;
	} 

	if ($_SESSION["eventos"] == "") {
		$erro_eventos = "<span style='color:blue'>Preencha o campo</span>";
		$erro ++;
	} 

	if ($erro == 0) {
		Header("Location: ../../Desafio/php/parte2.php");
	}
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
					<input type="Data" class="form-control" id="inputData4" name="data" value="<?php if (isset($_SESSION["data"])) echo $_SESSION["data"] ?>">
					
				 </div>

			    <div class="col-md-6">
			        <label for="inputHora4" class="form-label">Hora</label>
			        <input type="Hora" class="form-control" id="inputHora4" name="hora" value="<?php if (isset($_SESSION["hora"])) echo $_SESSION["hora"] ?>">

			 	 </div>

				 <div class="col-12">
				    <label for="inputLocal4" class="form-label">Local</label>
				    <input type="Local" class="form-control" id="inputLocal4" name="local" value="<?php if (isset($_SESSION["local"])) echo $_SESSION["local"] ?>"><?php echo $erro_local ?> 
				 </div>

				 <div class="col-12">
				   	<label for="inputEventos4" class="form-label">Eventos</label>
				    <input type="Eventos" class="form-control" id="inputEventos4" name="eventos" value="<?php if (isset($_SESSION["eventos"])) echo $_SESSION["eventos"] ?>"><?php echo $erro_eventos ?>
				 </div>

				 <div class="col-md-6">
				    <label for="inputAtividades4" class="form-label">Atividades</label>
				    <input type="Atividades" class="form-control" id="inputAtividades4" name="atividades" value="<?php if (isset($_SESSION["atividades"])) echo $_SESSION["atividades"] ?>">

				</div>

				</br></br>

		    	<div class="col-md-12">
		    		<input type="submit" class="btn btn-primary" name="confirma" value="Confirma">
		    		&nbsp;&nbsp;
		    		<input type="reset" class="btn btn-primary" value="Apaga">
		    
 				</div>
	    	</form>

		</fieldset>
	</body>
</html>