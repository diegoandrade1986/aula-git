<?php
	// Operações da Categoria
	include_once('../classes/ManipulacaoDeDados.php');
    $acao   = $_POST['acao'];
    $id     = $_POST['id'];
	
    $txt_categoria  = $_POST['txt_categoria'];
    $txt_ativo      = $_POST['txt_ativo'];
    if ($acao == "inserir")
    {
        $cad = new manipulacaoDeDados();
        $cad->setTabela("categoria");
        $cad->setCampos("categoria, ativo");
        $cad->setDados("'{$txt_categoria}', '{$txt_ativo}'");
        $cad->inserir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=2'</script>";
    }
    
    if ($acao == "alterar")
    {
        $alt = new manipulacaoDeDados();
        $alt->setTabela("categoria");
        $alt->setCampos("categoria='{$txt_categoria}', ativo='{$txt_ativo}'");
        $alt->setValorNaTabela("id_categoria");
        $alt->setValorPesquisa($id);
        $alt->alterar();
        echo "<script type='text/javascript'> location.href = '../index.php?link=2'</script>";
    }
    
    if ($acao == "excluir")
    {
        $excluir = new manipulacaoDeDados();
        $excluir->setTabela("categoria");
        $excluir->setValorNaTabela("id_categoria");
        $excluir->setValorPesquisa($id);
        $excluir->excluir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=2'</script>";
    }
?>
