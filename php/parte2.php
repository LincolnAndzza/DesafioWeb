<?php
	
	include 'conecta.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RecebiAgenda.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/parte2.css">
</head>

<body>

	<h4>Dados Agenda</h4></br>

	<div class="container">
		<div>
			<table class="table table-dark table-hover">	
				<tr class="config">
					
					<th>#</th>
					<th>Data</th>
					<th>Hora</th>
					<th>Local</th>
					<th>Eventos</th>
					<th>Atividades</th>
					<th>Ações</th>
				</tr>

				<?php
					require("../php/conecta.php");
					$busca=$mysqli->query("select * from agenda");
					while($agenda=$busca->fetch_assoc()) {
				?>
					
					<tr>
						<td><?php echo $agenda["codigo"];?></td>
						<td><?php echo $agenda["data"];?></td>
						<td><?php echo $agenda["hora"];?></td>
						<td><?php echo $agenda["local"];?></td>
						<td><?php echo $agenda["eventos"];?></td>	
						<td><?php echo $agenda["atividades"];?></td>	
					
						<td>
							<a href='../../Desafio/php/editar.php?editar=$agenda[codigo]'>Editar</a>
							&nbsp;&nbsp;
							<a href='../../Desafio/php/excluir.php?excluir=$agenda[codigo]'>Excluir</a>

						</td>
					</tr>
					<?php } ?> 
			</table>   
		</div>  

	</div>
</br></br>
<center>
	<a href="../../Desafio/index.php" class="btn btn-success">Voltar</a>
</center>
	

</body>
</html>

