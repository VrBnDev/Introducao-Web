<?php

class ProfessorDAO {


public static function listar() {

  $professores = [
    new Professor(1, 'Kleber Dantas', 20240001),
    new Professor(2, 'Maria Bona', 20240002),
    new Professor(3, 'Carlos Prado', 20240003),
    new Professor(4, 'Joana Darc', 20240004),
    new Professor(5, 'Lucas Carlos', 20240005),
    new Professor(6, 'Leandro Roque', 20240006),
    new Professor(7, 'Pablo Dantas', 20240007),
    new Professor(8, 'Fernanda Riama', 20240008),
    new Professor(9, 'Rafael Silva', 20240009),
    new Professor(10, 'Carla', 20240010),
    new Professor(11, 'Gabriel', 20240011),
    new Professor(12, 'Mariana', 20240012),
    new Professor(13, 'Gustavo', 20240013),
    new Professor(14, 'Beatriz', 20240014),
    new Professor(15, 'Rodrigo', 20240015),
    new Professor(16, 'Patrícia', 20240016),
    new Professor(17, 'André', 20240017),
    new Professor(18, 'Luana', 20240018),
    new Professor(19, 'Henrique', 20240019),
    new Professor(20, 'Camila', 20240020)
];
	
	return $professores;

}


}

?>
