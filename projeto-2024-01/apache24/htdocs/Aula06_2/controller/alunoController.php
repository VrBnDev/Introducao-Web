<?php
include '../model/Aluno.php';
include '../bo/AlunoBO.php';
include 'defaultController.php';
 

// Função para listar os alunos
function listar() {
	$msg = null;
    $alunos = AlunoBO::listar();
    // Incluir o arquivo do template para renderizar a view
    include '../view/aluno/listar.php';
}

function salvar() {
	try {
		$aluno = instaciaAlunoForm();
		$aluno = AlunoBO::salvar($aluno);
		$alunos[] = $aluno;
		$msg = ['texto' => 'Registro Salvo com sucesso','tipo' => 'success'];
		include '../view/aluno/listar.php';
    } catch (Exception $e) {
		$msg = ['texto' => $e->getMessage(),'tipo' => 'danger'];
		include '../view/aluno/form.php';
    }		 
   
}

function formulario(){
	$msg = null;
	$aluno = instaciaAlunoForm();
	include '../view/aluno/form.php';
}
  
function instaciaAlunoForm(){
	global $request;
	$id = getValor($request,'id');
	$nome = getValor($request,'nome');
	echo $nome;
	$idade = getValor($request,'idade');
	// instancia novo objeto aluno
	$aluno = new Aluno($id,$nome,$idade);
	return $aluno;
}

?>

