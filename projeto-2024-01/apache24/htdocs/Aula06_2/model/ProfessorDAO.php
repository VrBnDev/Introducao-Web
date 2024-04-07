<?php

require 'conexao_bd.php';

class ProfessorDAO {

	public static function listar() {
		global $db;
		$professores = [ ];
		$consultaSQL = "SELECT * FROM Professor order by id desc";
		$resultado = $db->query($consultaSQL);
		// Verifica se a consulta foi bem-sucedida
		if ($resultado) {
			// Loop através dos registros e criar objetos Professor
			while ($registro = $resultado->fetchArray(SQLITE3_ASSOC)) {
				// Para cada registro criar um novo objeto Professor com os dados das colunas
			   $professor = new Professor($registro['id'], $registro['nome'], $registro['matricula']);
				// Adiciona o objeto Professor ao array de professores
				$professores[] = $professor;
			}
			
		} else { 
			echo "Erro ao executar a consulta: " . $db->lastErrorMsg();
		}
		return $professores;

	}

	  public static function salvar($professor) {
			global $db;
			// Prepara a consulta SQL para inserir um novo professor na tabela 'Professor'
			$query = "INSERT INTO Professor (nome, matricula) VALUES (:nome, :matricula)";
			$stmt = $db->prepare($query);
			$stmt->bindValue(':nome', $professor->nome, SQLITE3_TEXT);
			$stmt->bindValue(':matricula', $professor->matricula, SQLITE3_INTEGER);

			// Executa a consulta
			$result = $stmt->execute();

			// Verifica se a inserção foi bem-sucedida
			if ($result) {
				// pega o ultimo id gerado pelo autoincremento e seta esse id no objeto;
				$lastId = $db->lastInsertRowID();
				$professor->id = $lastId;
			} else {
				throw new Exception("Erro ao salvar aluno: " . $db->lastErrorMsg());
			}
			return $professor;
	}
}

?>
