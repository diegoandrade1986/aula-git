<?php
    // Operações da Categoria
    include_once('../classes/ManipulacaoDeDados.php');
    $acao   = $_POST['acao'];
    $id     = $_POST['id'];
    
    $txt_produto    = $_POST['txt_produto'];
    $txt_img        = $_POST['txt_img'];
    $txt_categoria  = $_POST['txt_categoria'];
    $txt_descricao  = $_POST['txt_descricao'];
    if ($acao == "inserir")
    {
        $cad = new manipulacaoDeDados();
        $cad->setTabela("produto");
        $cad->setCampos("produto, img, descricao, id_categoria");
        $cad->setDados("'{$txt_produto}', '{$txt_img}', '{$txt_descricao}',$txt_categoria");
        $cad->inserir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=4'</script>";
    }
    
    if ($acao == "alterar")
    {
        $alt = new manipulacaoDeDados();
        $alt->setTabela("produto");
        $alt->setCampos("produto='{$txt_produto}',id_categoria={$txt_categoria}, img='{$txt_img}', descricao='{$txt_descricao}'");
        $alt->setValorNaTabela("id_produto");
        $alt->setValorPesquisa($id);
        $alt->alterar();
        echo "<script type='text/javascript'> location.href = '../index.php?link=4'</script>";
    }
    
    if ($acao == "excluir")
    {
        $excluir = new manipulacaoDeDados();
        $excluir->setTabela("produto");
        $excluir->setValorNaTabela("id_produto");
        $excluir->setValorPesquisa($id);
        $excluir->excluir();
        echo "<script type='text/javascript'> location.href = '../index.php?link=4'</script>";
    }
?>
