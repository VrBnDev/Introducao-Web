<?php

include '../model/AlunoDAO.php';
	class AlunoBO {
		
		public static function listar() {
			$alunos = AlunoDAO::listar();
			return $alunos;
		}
		
	    public static function salvar($aluno) {
			try {
				if (empty($aluno->nome)) {
					throw new Exception('O campo nome deve ser informado.');
				}
				if (empty($aluno->idade)) {
					throw new Exception('O campo idade deve ser informado.');
				}		
				$aluno = AlunoDAO::salvar($aluno);
				return $aluno;
			} catch (Exception $e) {
				throw new Exception('Ocorreu um erro: ' . $e->getMessage());
			}	
		}
		    
	}
?>

