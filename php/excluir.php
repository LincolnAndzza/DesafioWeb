<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<body>
	<?php 

		if(isset($_GET["excluir"])){

			$codigo = htmlentities($_GET["excluir"]);

			require("conecta.php");

			$mysqli->query("delete from agenda where codigo = '$codigo'");
			echo $mysqli->error;

			if ($mysqli->error==""){
				echo "EXCLUIDO COM SUCESSO<br/><br/>";
				echo "<a href='../../Desafio/php/parte2.php'><button>Voltar Página</button></a>";
			}

		}

	?>

	<a href='js:deseja_excluir($agenda[codigo])'></a>
	<script type="text/javascript" src="../../../Desafio/js/newexcluir.js?<?php echo time() ?>"></script>	
</body>
</html>