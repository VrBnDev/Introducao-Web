<?php

require 'conexao_bd.php';

class DisciplinaDAO {

	public static function listar() {
		global $db;
		$disciplinas = [ ];
		$consultaSQL = "SELECT * FROM Disciplina order by id desc";
		$resultado = $db->query($consultaSQL);
		// Verifica se a consulta foi bem-sucedida
		if ($resultado) {
			// Loop através dos registros e criar objetos Disciplina
			while ($registro = $resultado->fetchArray(SQLITE3_ASSOC)) {
				// Para cada registro criar um novo objeto Disciplina com os dados das colunas
			   $disciplina = new Disciplina($registro['id'], $registro['nome'], $registro['ementa'], $registro['cargahoraria']);
				// Adiciona o objeto Professor ao array de professores
				$disciplinas[] = $disciplina;
			}
			
		} else { 
			echo "Erro ao executar a consulta: " . $db->lastErrorMsg();
		}
		return $disciplinas;

	}

	  public static function salvar($disciplina) {
			global $db;
			// Prepara a consulta SQL para inserir uma nova disciplina na tabela 'Disciplina'
			$query = "INSERT INTO Disciplina (nome, ementa, cargahoraria) VALUES (:nome, :ementa, :cargahoraria)";
			$stmt = $db->prepare($query);
			$stmt->bindValue(':nome', $disciplina->nome, SQLITE3_TEXT);
			$stmt->bindValue(':ementa', $disciplina->ementa, SQLITE3_TEXT);
			$stmt->bindValue(':cargahoraria', $disciplina->cargahoraria, SQLITE3_INTEGER);

			// Executa a consulta
			$result = $stmt->execute();

			// Verifica se a inserção foi bem-sucedida
			if ($result) {
				// pega o ultimo id gerado pelo autoincremento e seta esse id no objeto;
				$lastId = $db->lastInsertRowID();
				$disciplina->id = $lastId;
			} else {
				throw new Exception("Erro ao salvar aluno: " . $db->lastErrorMsg());
			}
			return $disciplina;
	}
}

?>
