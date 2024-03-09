<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Academico | Alunos</title>
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
		<h3>Formulário</h3>

		<form>
			<div class="form-group">
				<label for="InputNome">Nome Completo:</label>
				<input type="text" class="form-control" id="InputNome" aria-describedby="nameHelp" placeholder="Ex.: José Pitangas">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail">Email</label>
				<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Senha">
				<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
			</div>
			<div class="form-group form-check">
				<div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Clique em mim</label>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>