<?php
class Aluno {
    public $id;
    public $nome;
    public $idade;

   // Construtor com todos os parâmetros
    public function __construct($id = null, $nome = null, $idade = null) {
        if ($id != null) {
            $this->id = $id;
        }
        if ($nome != null) {
            $this->nome = $nome;
        }
        if ($idade != null) {
            $this->idade = $idade;
        }
	
    }

	
}
?>