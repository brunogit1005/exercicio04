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
		session_start();
		
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Email</th>
				<th>Número da Conta</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["conta"] as $i=>$p){
					$p->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>