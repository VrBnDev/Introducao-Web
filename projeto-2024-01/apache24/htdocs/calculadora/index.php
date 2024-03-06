<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
</head>
<body>
	<h1>Bem-Vindo a Calculadora</h1>
	<hr>
	<form method="get" action="../controller/controller.php">
		<select name="funcao">
			<option value="somar">Somar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="subtrair">Subtrair</option>
			<option value="dividir">Dividir</option>
			<option value="bhaskara">Bhaskara</option>
		</select>

		<fieldset>
			<label for=""></label>
			<input type="number" name='n1'>
			<input type="number" name='n2'>
			<input type="number" name='n3' disabled>

		</fieldset>

		<input type="submit" value="Calcular">
	</form>
</body>
</html>