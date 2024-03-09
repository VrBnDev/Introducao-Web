<!doctype html>
<html lang="pt-br">

<head>
	<title>Sistema Academico | Cadastro Professor</title>
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
						<a class="dropdown-item" href="../controller/professorController.php?funcao=listarProfessores">Professores</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<br>
		<h2>Cadastro de Professor</h2>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" placeholder="Ex.: Jorge">
				</div>
				<div class="form-group col-md-6">
					<label for="nome">Sobrenome</label>
					<input type="text" class="form-control" placeholder="Ex.: Catanguento">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Senha</label>
					<input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Endereço</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
			</div>
			<div class="form-group">
				<label for="inputAddress2">Endereço 2</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputCity">Cidade</label>
					<input type="text" class="form-control" id="inputCity">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEstado">Estado</label>
					<select id="inputEstado" class="form-control">
						<option selected>Escolher...</option>
						<option>Acre</option>
						<option>Ceará</option>
						<option>Pernambuco</option>
						<option>Piauí</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputCEP">CEP</label>
					<input type="text" class="form-control" id="inputCEP">
				</div>
				<div class="form-group col-md-12">
					<label for="">Disciplina</label>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Li e concordo com os <a class="link text-primary">termos de uso</a> e a <a href="">política de privacidade</a>
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Entrar</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</script>
</body>

</html>