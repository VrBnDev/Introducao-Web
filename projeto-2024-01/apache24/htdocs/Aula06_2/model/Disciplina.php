<?php
class Disciplina {
    public $id;
    public $nome;
    public $ementa;
    public $cargahoraria;

   // Construtor com todos os parâmetros
    public function __construct($id = null, $nome = null, $ementa = null, $cargahoraria = null) {
        if ($id != null) {
            $this->id = $id;
        }
        if ($nome != null) {
            $this->nome = $nome;
        }
        if ($ementa != null) {
            $this->ementa = $ementa;
        }
        if ($cargahoraria != null) {
            $this->cargahoraria = $cargahoraria;
        }
	
    }

	
}
?>