<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Academico | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Sistema Acadêmico</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../../controller/alunoController.php?funcao=listar">Aluno</a></li>
            <li><a href="../../controller/professorController.php?funcao=listarProfessores">Professor</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container">

    <h3>SISTEMA DE CONTROLE ACADÊMICO</h3>

  </div>
</body>
</html>
