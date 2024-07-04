<?php

require 'conexao_bd.php';

class AlunoDAO {

	public static function listar() {
		global $db;
		$alunos = [ ];
		$consultaSQL = "SELECT * FROM Aluno order by id desc";
		$resultado = $db->query($consultaSQL);
		// Verifica se a consulta foi bem-sucedida
		if ($resultado) {
			// Loop através dos registros e criar objetos Aluno
			while ($registro = $resultado->fetchArray(SQLITE3_ASSOC)) {
				// Para cada registro criar um novo objeto Aluno com os dados das colunas
			   $aluno = new Aluno($registro['id'], $registro['nome'], $registro['idade']);
				// Adiciona o objeto Aluno ao array de alunos
				$alunos[] = $aluno;
			}
			
		} else { 
			echo "Erro ao executar a consulta: " . $db->lastErrorMsg();
		}
		return $alunos;

	}

	  public static function salvar($aluno) {
			global $db;
			// Prepara a consulta SQL para inserir um novo aluno na tabela 'Aluno'
			$query = "INSERT INTO Aluno (nome, idade) VALUES (:nome, :idade)";
			$stmt = $db->prepare($query);
			$stmt->bindValue(':nome', $aluno->nome, SQLITE3_TEXT);
			$stmt->bindValue(':idade', $aluno->idade, SQLITE3_INTEGER);
           //echo $aluno->nome;
			// Executa a consulta
			$result = $stmt->execute();

			// Verifica se a inserção foi bem-sucedida
			if ($result) {
				// pega o ultimo id gerado pelo autoincremento e seta esse id no objeto;
				$lastId = $db->lastInsertRowID();
				$aluno->id = $lastId;
			} else {
				throw new Exception("Erro ao salvar aluno: " . $db->lastErrorMsg());
			}
			return $aluno;
	}

	public static function buscar($aluno){
		global $db;
		$consultaSQL = 'SELECT * FROM Aluno WHERE id=' . $aluno->id;
		$resultado = $db->query($consultaSQL);
		if($resultado){
			while ($registro = $resultado->fetchArray(SQLITE3_ASSOC)){
				$aluno = new Aluno($registro['id'], $registro['nome'],$registro['idade']);
			}	 
		} else {
				echo "Erro ao executar a consulta: " . $db->lastErrorMsg();
		}
		return $aluno;
	}

	public static function excluir($aluno){
		global $db;
		$consultaSQL = 'DELETE FROM Aluno WHERE id='. $aluno->id;
		$resultado = $db->query($consultaSQL);
		if ($resultado){
					
		} else {
			echo "Erro ao excluir registro: " . $db->lastErrorMsg();
		}

		return $resultado;
	}

}

?>
