<?php
include '../model/Professor.php';
include '../bo/ProfessorBO.php';
include 'defaultController.php';
 
// Função para listar os professores
function listar() {
	$msg = null;
    $professores = ProfessorBO::listar();
    // Incluir o arquivo do template para renderizar a view
    include '../view/professor/listar.php';
}

function salvar() {
	try {
		$professor = instaciaProfessorForm();
		$professor = ProfessorBO::salvar($professor);
		$professores[] = $professor;
		$msg = ['texto' => 'Registro Salvo com sucesso','tipo' => 'success'];
		include '../view/professor/listar.php';
    } catch (Exception $e) {
		$msg = ['texto' => $e->getMessage(),'tipo' => 'danger'];
		include '../view/professor/form.php';
    }		 
   
}

function formulario(){
	$msg = null;
	$professor = instaciaProfessorForm();
	include '../view/professor/form.php';
}
  
function instaciaProfessorForm(){
	global $request;
	$id = getValor($request,'id');
	$nome = getValor($request,'nome');
	$matricula = getValor($request,'matricula');
	// instancia novo objeto professor
	$professor = new Professor($id,$nome,$matricula);
	return $professor;
}

?>

