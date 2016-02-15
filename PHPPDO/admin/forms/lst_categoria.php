<?php 

	include_once("classes/listagem.php");	
	$lista = new listagem();	
	//$lista->setNumPagina($_GET["pg"]);
	//$lista->setUrl("principal.php?link=2");
	
?>

<h2> lista de Categoria </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>ID </th>
			<th>Categoria </th>
			<th>Ativo </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
	   <?php $lista->listarCategoria(); ?></td> 
	</tbody>

</table>