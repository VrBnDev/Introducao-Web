<?php

include '../model/ProfessorDAO.php';
	class ProfessorBO {
		
		public static function listar() {
			$professores = ProfessorDAO::listar();
			return $professores;
		}
		
	    public static function salvar($professor) {
			try {
				if (empty($professor->nome)) {
					throw new Exception('O campo nome deve ser informado.');
				}
				if (empty($professor->matricula)) {
					throw new Exception('O campo matricula deve ser informado.');
				}		
				$professor = ProfessorDAO::salvar($professor);
				return $professor;
			} catch (Exception $e) {
				throw new Exception('Ocorreu um erro: ' . $e->getMessage());
			}	
		}
		    
	}
?>

