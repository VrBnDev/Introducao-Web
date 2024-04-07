<?php
	try {
		$db = new SQLite3('../model/meubanco.db');
	} catch (Exception $e) {
		echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit();
}
?>

