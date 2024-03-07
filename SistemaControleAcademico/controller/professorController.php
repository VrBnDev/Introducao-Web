<?php

include '../model/Professor.php';

// Verifica se foi passado um parâmetro na URL chamado 'funcao'
$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'funcao';
// Chama o método correspondente ao valor do parâmetro 'funcao' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}

// Função para listar os professores
function listarProfessores() {
	
    $professor = [
        new Professor(1, 'Karlos', 35, 'Matématica'),
        new Professor(2, 'Júlia', 22, 'Informática'),
        new Professor(3, 'Márcio', 21, 'Biologia')
    ];

    // Incluir o arquivo do template para renderizar a view
    include '../view/professor/listarProfessores.php';
}



?>
