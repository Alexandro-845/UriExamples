<!--  
	Desenvolvido por https://github.com/Alexandro-845
	Versão 1.0 - 2020
-->
<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
	
	//include('verifica_login.php');
?>
<html>
	<head>
		<title>Código do exercicio</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style/style.css">
		<link rel="shortcut icon" href="Images/favicon.ico" />	
		<script src="https://apis.google.com/js/platform.js" async defer></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="google-signin-client_id" content="384602407862-g2t95qbtuto07r923qlic2317dbrkboa.apps.googleusercontent.com">
		<script>
			pre{
				padding: 10px;
				margin: 0 0 10px;
				font-size: 13px;
				color: #000;
			}
		</script>
	</head>
<body>
	<ul><!-- Menu Inicial -->
		<li style="float:left"><a>Bem Vindo, <?php echo $_SESSION['userName'];?>!</a></li>
		<li style="float:right"><a href="logout.php">Sair</a></li>
		<li style="float:right"><a href="Admin.php">Voltar</a></li>	
	</ul><!-- Fim Menu Inicial -->

    <h2 align ="left">Código do Exercicio <?php  $id=$_GET['id']; echo"$id"; ?>!</h2><br>
	
	<!-- Recebe Um id Por Parametro e Mostra o resultado do código -->
	<pre background color="white">
		<?php
			$id=$_GET['id'];
			require('conexao.php');
				
			$result = mysqli_query($db, "SELECT * FROM exercicio where id=$id");
					
			$row = mysqli_fetch_assoc($result);
			$texto = $row['source'];
			echo $texto;
			mysqli_free_result($result);
		?>
	</pre>
</body>
</html>