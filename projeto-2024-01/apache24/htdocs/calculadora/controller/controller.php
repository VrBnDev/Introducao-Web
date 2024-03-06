<?php
	
	if( isset($_GET['funcao']) ){
	$funcao = $_GET['funcao'];
	if (!function_exists($funcao) || !is_callable($funcao))
			$funcao ='invalida';
	}
	else 
		$funcao ='invalida';

	$funcao();

	function formulario(){
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		include '../view/templateCalculadora.php';
	}

	function soma(){
		$tipo = 'SOMA';
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		$resultado = Calculadora::somar($n1,$n2);
		include '../view/templateResultadoCalculadora.php';
	}
	
	function subtrair(){
		$tipo = 'SUBTRAÇÃO';
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		$resultado = Calculadora::subtrair($n1,$n2);
		include '../view/templateResultadoCalculadora.php';
	}
	
	function multiplicar(){
		$tipo = 'MULTIPLICAÇÃO';
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		$resultado = Calculadora::multiplicar($n1,$n2);
		include '../view/templateResultadoCalculadora.php';
	}
	
	function dividir(){
		$tipo = 'DIVISÃO';
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		$resultado = Calculadora::dividir($n1,$n2);
		include '../view/templateResultadoCalculadora.php';
	}
	
	function baskara(){
		$tipo = 'BHASKARA';
		$n1 = '';
		if(isset($_GET['n1']))
			$n1 = $_GET['n1'];
		$n2 = '';
		if(isset($_GET['n2']))
			$n2 = $_GET['n2'];	
		if(isset($_GET['n3']))
			$n3 = $_GET['n3'];
		$resultado = Calculadora::bhaskara($n1,$n2,$n3);
		include '../view/templateResultadoCalculadora.php';
	}

?>