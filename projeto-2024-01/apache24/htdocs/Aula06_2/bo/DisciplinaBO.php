<?php

include '../model/DisciplinaDAO.php';

class DisciplinaBO {		
		public static function listar() {
			$disciplinas = DisciplinaDAO::listar();
			return $disciplinas;
		}
		
	    public static function salvar($disciplina) {
			try {
				if (empty($disciplina->nome)) {
					throw new Exception('O campo nome deve ser informado.');
				}
				if (empty($disciplina->ementa)) {
					throw new Exception('O campo ementa deve ser informado.');
				}
				if (empty($disciplina->cargahoraria)) {
					throw new Exception('O campo carga horária deve ser informado.');
				}		
				$disciplina = DisciplinaDAO::salvar($disciplina);
				return $disciplina;
			} catch (Exception $e) {
				throw new Exception('Ocorreu um erro: ' . $e->getMessage());
			}	
		}
		
		public static function editar($disciplina){
			$disciplina = DisciplinaDAO::buscar($disciplina);
			return $disciplina;
		}

		public static function excluir($disciplina) {
			$disciplina = DisciplinaDAO::excluir($disciplina);
		}
	}
?>

