<?php
include '../model/Disciplina.php';
include '../bo/DisciplinaBO.php';
include 'defaultController.php';
 
// Função para listar as disciplinas
function listar() {
	$msg = null;
    $disciplinas = DisciplinaBO::listar();
    // Incluir o arquivo do template para renderizar a view
	include '../view/disciplina/listar.php';
}

function salvar() {
	try {
		$disciplina = instaciaDisciplinaForm();
		$disciplina = DisciplinaBO::salvar($disciplina);
		$disciplinas[] = $disciplina;
		$msg = ['texto' => 'Registro Salvo com sucesso','tipo' => 'success'];
		include '../view/disciplina/listar.php';
    } catch (Exception $e) {
		$msg = ['texto' => $e->getMessage(),'tipo' => 'danger'];
		include '../view/disciplina/form.php';
    }		 
   
}

function formulario(){
	$msg = null;
	$disciplina = instaciaDisciplinaForm();
	include '../view/disciplina/form.php';
}
  
function instaciaDisciplinaForm(){
	global $request;
	$id = getValor($request,'id');
	$nome = getValor($request,'nome');
	echo $nome;
	$ementa = getValor($request,'ementa');
	$cargahoraria = getValor($request,'cargahoraria');
	// instancia novo objeto disciplina
	$disciplina = new Disciplina($id,$nome,$ementa, $cargahoraria);
	return $disciplina;
}

function editar(){
	$acao = "atualizar";
	$msg = null;
	$disciplina = instaciaDisciplinaForm();
	$disciplina = DisciplinaBO::editar($disciplina);
	include '../view/disciplina/form.php';
}

function excluir(){
	try {
		$acao = 'excluir';
		$msg = ['texto' => 'Registro Excluído com sucesso','tipo' => 'success'];
		$disciplina = instaciaDisciplinaForm();
		$disciplina = DisciplinaBO::excluir($disciplina);
		include '../view/disciplina/listar.php';
	} catch (Exception $e) {
		$msg = ['texto' => $e->getMessage(),'tipo' => 'danger'];
		include '../view/disciplina/form.php';
	}
}

?>

