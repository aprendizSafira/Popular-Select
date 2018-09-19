<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
</head>
<body>
	<form method="POST">
		Escolha o modulo:<br/>
		<select name="modulos" id="modulos" onchange="pegarAulas(this)">
			<option></option>
			<?php foreach($modulos as $item): ?>
				<option value="<?php echo $item['id']; ?>"><?php echo $item['titulo']; ?></option>
			<?php endforeach; ?>
		</select><br/><br/>
		Escolha a aula:<br/>
		<select name="aulas" id="aulas">
			
		</select><br/><br/>

		<input type="submit" name="enviar">
	</form>
</body>
</html>
