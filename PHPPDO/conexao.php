<?php 
	function conectar()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "workl491_apolo";

		//Tratando com try catch - Utilizada para prever erros
		try 
		{
			$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
			//Passando 3 parametros o host e o tipo de banco de dados 2 usuario e 3 nome do banco	
			return $pdo;
		} catch (PDOException $e) {
			// Mostrando a mensagem de erro
			echo $e->getMessage();
			//Mostrando o Código de Erro
			//echo $e->getCode();
		}
	}
	
?>