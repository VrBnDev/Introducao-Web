<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Academico | Professores</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  	<nav class="navbar navbar-inverse">
	    <div class="container-fluid">
	      <div class="navbar-header">
	        <a class="navbar-brand" href="../view/home/">Sistema Acadêmico</a>
	      </div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="../view/home/">Home</a></li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="../controller/alunoController.php?funcao=listar">Aluno</a></li>
	            <li><a href="../controller/professorController.php?funcao=listarProfessores">Professor</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Page 2</a></li>
	        <li><a href="#">Page 3</a></li>
	      </ul>
	    </div>
	  </nav>
    <div class="container">
			<h1>Lista de Professores</h1>

			<table border="1" width="50%">
			  <tr>
				   <th>ID</th>
				   <th>Nome</th>
				   <th>Idade</th>
				   <th>Disciplina</th>
			  </tr>
			
			  <?php foreach ($professor as $item): ?>
					<tr>
					   <td><?=$item->id ?></td>
					   <td><?=$item->nome ?></td>
					   <td><?=$item->idade?> Anos</td>
					   <td><?=$item->disciplina?></td>
			    </tr>
		    <?php endforeach; ?>
			</table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
  
