<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
</head>
<body>
	<h1>Digite o que você deseja calcular:</h1>
	<form method="get" action="../controller/controller.php">
		<select name="funcao">
			<option value="somar">Somar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="subtrair">Subtrair</option>
			<option value="dividir">Dividir</option>
			<option value="bhaskara">Bhaskara</option>
			<option value="raiz">Raiz</option>
			<option value="aoquadrado">X²</option>
			<option value="elevado">X elevado Y</option>
		</select>
		<br>	
		<fieldset>
			<legend>Entradas:</legend>
			<label>N1</label>
			<input type="number" name='n1'>
			<label>N2</label>
			<input type="number" name='n2'>
			<label>N3</label>
			<input type="number" name='n3'>
		</fieldset>
		<br>
		<input type="submit" value="Calcular">
	</form>

</body>
</html>