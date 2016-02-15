<?php
	// Operações da Categoria
	include_once('../classes/ManipulacaoDeDados.php');
    $acao   = $_POST['acao'];
    $id     = $_POST['id'];
	
    $txt_descricao  = $_POST['txt_descricao'];
    $txt_img        = $_POST['txt_img'];
    $txt_url        = $_POST['txt_url'];
    if ($acao == "inserir")
    {
        $cad = new manipulacaoDeDados();
        $cad->setTabela("banner");
        $cad->setCampos("descricao, img, url");
        $cad->setDados("'{$txt_descricao}', '{$txt_img}', '{$txt_url}'");
        $cad->inserir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=6'</script>";
    }
    
    if ($acao == "alterar")
    {
        $alt = new manipulacaoDeDados();
        $alt->setTabela("banner");
        $alt->setCampos("descricao='{$txt_descricao}', img='{$txt_img}', url='{$txt_url}'");
        $alt->setValorNaTabela("id_banner");
        $alt->setValorPesquisa($id);
        $alt->alterar();
        echo "<script type='text/javascript'> location.href = '../index.php?link=6'</script>";
    }
    
    if ($acao == "excluir")
    {
        $excluir = new manipulacaoDeDados();
        $excluir->setTabela("banner");
        $excluir->setValorNaTabela("id_banner");
        $excluir->setValorPesquisa($id);
        $excluir->excluir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=6'</script>";
    }
?>
