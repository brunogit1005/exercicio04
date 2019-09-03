<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
    <?php
    include("classeContaCorrente.php");

   $g= new ContaCorrente ($_POST);

   session_start();

   $_SESSION["conta"][]=$g;

   $g->exibe_dados();    

	

	?>
	</body>
</html>