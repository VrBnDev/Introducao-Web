<?php
class Professor {
    public $id;
    public $nome;
    public $matricula;

   // Construtor com todos os parâmetros
    public function __construct($id = null, $nome = null, $matricula = null) {
        if ($id != null) {
            $this->id = $id;
        }
        if ($nome != null) {
            $this->nome = $nome;
        }
        if ($matricula != null) {
            $this->matricula = $matricula;
        }
	
    }

	
}
?>