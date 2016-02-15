<?php
include("conexao.php");
$pdo = conectar();
/*
$buscarusuario = $pdo->prepare("SELECT * FROM usuario");
$buscarusuario->execute();
echo $buscarusuario->rowCount(); // Numero de Linhas
//$buscarusuario->fetch(PDO::FETCH_ASSOC);//Informando se volta um array ou objeto
//FETCH_ASSOC  -- ARRAY ASSOCIATIVO
$linha = $buscarusuario->fetchAll(PDO::FETCH_ASSOC); //Diferenca que traz tudo em um array bidimensional
foreach ($linha as $listar) {
	echo $listar['username'] . "<br />";	
}
*/

/*
while ($linha = $buscarusuario->fetch(PDO::FETCH_ASSOC))
{
	echo $linha['username'] . "<br />";
}

*/

//$buscarusuario = $pdo->prepare("SELECT * FROM usuario where usuarioid=:id");
$buscarusuario = $pdo->prepare("SELECT * FROM usuario where username=:id");
$buscarusuario->bindValue(":id","criasoft';DELETE FROM atendauto",PDO::PARAM_STR);//passando o parametro referente ao tipo do valor no banco
$buscarusuario->execute();
//echo $buscarusuario->rowCount(); // Numero de Linhas
//$buscarusuario->fetch(PDO::FETCH_ASSOC);//Informando se volta um array ou objeto
//FETCH_ASSOC  -- ARRAY ASSOCIATIVO

$linha = $buscarusuario->fetchAll(PDO::FETCH_ASSOC); //Diferenca que traz tudo em um array bidimensional

foreach ($linha as $listar) {
	echo $listar['username'] . "<br />";	
}


?>