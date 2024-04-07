<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    $request = $_POST;
else
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $request = $_GET;
}	
function getValor($request,$var){
	$valor = isset($request[$var]) ? $request[$var] : null;
	return $valor;
}
$acao = getValor($request,'acao');
// Chama o método correspondente ao valor do parâmetro 'acao' usando reflexão
if (function_exists($acao) && is_callable($acao)) {
    $acao();
} else {
    echo "Ação inválida";
}
?>
