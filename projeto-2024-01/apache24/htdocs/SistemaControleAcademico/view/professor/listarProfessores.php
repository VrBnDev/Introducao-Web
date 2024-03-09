<!doctype html>
<html lang="pt-br">

<head>
	<title>Sistema Academico | Professores</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../view/home">Sistema Acadêmico</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../view/home">Home <span class="sr-only"></span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cadastros
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="../controller/alunoController.php?funcao=listar">Alunos</a>
						<a class="dropdown-item" href="../../controller/professorController.php?funcao=listarProfessores">Professores</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1> Lista de Professores</h1>
		<small>Todas as informações sobre os professores estão aqui.</small>
		<br>
		<br>
		<div>
			<button type="button" class="btn btn-primary" onclick="location.href='../controller/alunoController.php?funcao=cadastroAluno'"><i class="fa-solid fa-plus"></i> Cadastrar </button>
		</div>
		<br>
		<div class="box">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Idade</th>
						<th scope="col">Disciplina</th>
						<th scope='col'>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($professor as $item) : ?>
						<tr scope='row'>
							<td style='width: 80px'><?= $item->id ?></td>
							<td><?= $item->nome ?></td>
							<td style='width: 100px'><?= $item->idade ?> Anos</td>
							<td style='width: 100px'><?= $item->disciplina ?></td>
							<td style='width: 80px'>
								<div class="btn-group">
									<button class="btn btn-terciary"><i class="fa-solid fa-trash"></i></button>
									<button class="btn btn-terciary"><i class="fa-solid fa-edit"></i></button>
									<button class="btn btn-terciary"><i class="fa-solid fa-list"></i></button>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</script>
</body>

</html>