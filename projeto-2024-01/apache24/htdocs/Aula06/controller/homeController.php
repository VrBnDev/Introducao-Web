<?php


 
// Verifica se foi passado um parâmetro na URL chamado 'funcao'
$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'funcao';
// Chama o método correspondente ao valor do parâmetro 'funcao' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}
	


function index(){
	 include '../view/home/index.php';
}

	
    



?>
