<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
   <h1>Formulário</h1>

   <form  method="get" action="../controller/controller.php">

	Operação<br>
    <select name="funcao">
      <option value="soma">Soma</option>
      <option value="subtrair">Subtrair</option>
      <option value="multiplicar">Multiplicar</option> 
	<option value="dividir">Dividir</option> 	  
    </select>

<br>
    N1<br>
    <input type="input" name="n1" value="">
    <br><br>
        N2<br>
    <input type="input" name="n2" value="">

    <br>

    <input type="submit" value="Calcular" > 
     
   </form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>