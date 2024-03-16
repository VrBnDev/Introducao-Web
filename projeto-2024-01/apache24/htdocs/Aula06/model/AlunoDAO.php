<?php

class AlunoDAO {


public static function listar() {

  $alunos = [
    new Aluno(1, 'João', 20),
    new Aluno(2, 'Maria', 22),
    new Aluno(3, 'Pedro', 21),
    new Aluno(4, 'Ana', 19),
    new Aluno(5, 'Lucas', 23),
    new Aluno(6, 'Juliana', 20),
    new Aluno(7, 'Marcos', 21),
    new Aluno(8, 'Fernanda', 22),
    new Aluno(9, 'Rafael', 20),
    new Aluno(10, 'Carla', 21),
    new Aluno(11, 'Gabriel', 23),
    new Aluno(12, 'Mariana', 19),
    new Aluno(13, 'Gustavo', 22),
    new Aluno(14, 'Beatriz', 20),
    new Aluno(15, 'Rodrigo', 21),
    new Aluno(16, 'Patrícia', 22),
    new Aluno(17, 'André', 20),
    new Aluno(18, 'Luana', 21),
    new Aluno(19, 'Henrique', 23),
    new Aluno(20, 'Camila', 22)
];
	
	return $alunos;

}


}

?>
