<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>

		<script>
			function liberar_limite(valor){
				if(valor=="ce"){
					document.getElementById("limite").style.display="block";
				}else{
					document.getElementById("limite").style.display="none";
				}
				
			}
		</script>
	</head>
	<body>
	
		<form method="POST" action="cadastro_conta.php">
			<input type="text" name="nome" 
				placeholder="nome..." /><br />

			<input type="text" name="cpf" 
				placeholder="cpf..." /><br />

			<?php
			$codigo = @date("YmdHis");
			echo "<input type=\"text\" name=\"nroConta\" value=\"$codigo\"/>"
			?><br />

            <input type="email" name="email" 
				placeholder="Digite email..." /><br />

			<select name="tipo" onchange="liberar_limite(this.value)">
				<option value="">::selecione::</option>
				<option value="cc">Conta Corrente</option>
				<option value="ce">Conta Especial</option>
			</select>
			<br />
			<div id="limite" style="display:none">
				<input type="number" name="limite" placeholder="Digite o limite especial..."  />				
			</div>
	
    
			
                <input type="submit" value="cadastrar" /> <br />
		</form>
	</body>
</html>