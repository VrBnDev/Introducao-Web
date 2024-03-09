<?php
class Professor {
    public $id;
    public $nome;
    public $idade;
    public $disciplina;

   // Construtor com todos os parâmetros
    public function __construct($id = null, $nome = null, $idade = null, $disciplina = null) {
        if ($id != null) {
            $this->id = $id;
        }
        if ($nome != null) {
            $this->nome = $nome;
        }
        if ($idade != null) {
            $this->idade = $idade;
        }
	    if ($disciplina != null){
            $this->disciplina = $disciplina;
        }

    }
	
}
?>