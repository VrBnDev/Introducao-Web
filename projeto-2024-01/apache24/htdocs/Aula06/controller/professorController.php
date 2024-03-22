<?php


include '../model/professor.php';
include '../model/ProfessorDAO.php';

 
// Verifica se foi passado um parâmetro na URL chamado 'funcao'
$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'funcao';
// Chama o método correspondente ao valor do parâmetro 'funcao' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}



// Função para listar os professores
function listar() {
	
    $professores = ProfessorDAO::listar();
	
    // Incluir o arquivo do template para renderizar a view
    include '../view/professor/listar.php';
}

function formulario(){
	 include '../view/professor/form.php';
}

function salvar() {
	
	$nome = '';
	if(isset($_GET['nome']))
		$nome = $_GET['nome'];

	$idade = '';
	if(isset($_GET['idade']))
		$idade = $_GET['idade'];	

	$professor = new Professor($nome, $idade);
    $professores = [];
	$professores[] = $professor;
     

    // Incluir o arquivo do template para renderizar a view
    include '../view/professor/listar.php';
}


?>
