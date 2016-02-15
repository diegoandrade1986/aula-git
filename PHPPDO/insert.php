<?php 
	include("conexao.php");
	//Fazendo o select
	//  $pdo->query()  -- Seria o mysql_query
	$pdo = conectar();
	$buscarusuario = $pdo->query("Select * FROM usuario where usuarioid=1");
	
	/*
	$pdo->prepare() - Uma divisão entre a query e os valores que serão atribuidos a mesma
	sistema de preparo que evita a injeção de sql visto que nós temos a inserção de códigos
	separada da consulta.

	Pode se colocar SELECT * FROM usuario where usuarioid=? and username=?
	Ou Usando Pseudo Nomes
	SELECT * FROM usuario where usuarioid=:id and username=:username

	*/
	$id = 1;
	$buscasegura = $pdo->prepare("SELECT * FROM usuario where usuarioid=:usuarioid and username=:username");

	/*
		Preenchendo os valores os Pseudo Nomes
	*/
	$buscasegura->bindValue(":usuarioid",$id);
	$buscasegura->bindValue(":username","criasoft");
	//Executando a query Preparada
	$buscasegura->execute();
	//echo $buscasegura->rowCount(); // Retorna o numero de linhas do banco

	$username = "criasoft2";
	try{
		//Prepara o Cadastro
		$buscasegura = $pdo->prepare("INSERT INTO usuario (username,passcode,active,localid) VALUES (:username,:passcode,:active,:localid)");
	/*
		Preenchendo os valores dos Pseudo Nomes
	*/
		//Validando os campos		
		$buscasegura->bindValue(":username",$username);
		$buscasegura->bindValue(":passcode","1234");
		$buscasegura->bindValue(":active",1);
		$buscasegura->bindValue(":localid",1);
		
		//Valida Cadastro
		$validar = $pdo->prepare("SELECT username FROM usuario where username=?");
		$validar->execute(array($username));
		if ($validar->rowCount() == 0)
		{
			//Executando a query Preparada
			$buscasegura->execute();
		}
		else
		{
			echo "Ja existe";
		}
		//echo $buscasegura->rowCount(); // Retorna o numero de linhas do banco
	}catch (PDOException $e) {
		echo $e->getMessage();
		echo "catch";
	}
?>