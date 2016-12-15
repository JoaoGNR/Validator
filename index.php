<!DOCTYPE>
<html>
	<head>
		<title> Projeto Symfony/Validator </title>
	</head>
	<body>
		<form action="verifica.php" method="POST">
			<label for="busca">Verificar o numero de letras de uma palavra</label>
			<input id="busca" type="text" name="verifica"/>
			<input type="submit" value="Verifica" onclick="verificar(verifica)" />
		</form>
	</body>
</html>
