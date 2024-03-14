<?php


include '../model/Aluno.php';

 
// Verifica se foi passado um parâmetro na URL chamado 'funcao'
$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'funcao';
// Chama o método correspondente ao valor do parâmetro 'funcao' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}



// Função para listar os alunos
function listar() {
	
    $alunos = [
        new Aluno(1, 'João', 20),
        new Aluno(2, 'Maria', 22),
        new Aluno(3, 'Pedro', 21)
    ];


    // Incluir o arquivo do template para renderizar a view
    include '../view/aluno/listar.php';
}

function formulario(){
	 include '../view/aluno/form.php';
}

function salvar() {
	
	$nome = '';
	if(isset($_GET['nome']))
		$nome = $_GET['nome'];

	$idade = '';
	if(isset($_GET['idade']))
		$idade = $_GET['idade'];	

	$aluno = new Aluno($nome, $idade);
    $alunos = [];
	$alunos[] = $aluno;
     

    // Incluir o arquivo do template para renderizar a view
    include '../view/aluno/listar.php';
}


?>
