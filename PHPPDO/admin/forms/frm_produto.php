<?php
    $acao   = isset($_GET['acao'])?$_GET['acao']:'';
    $id     = isset($_GET['id'])?$_GET['id']:0;
    
    if ($acao != "" && $id != 0)
    {
        include_once 'classes/buscarDados.php';
        $lista = new buscarDadosProduto();
        $lista->setId($id);
        $lista->mostraDados();
        $descricao  = $lista->getDescricao();
        $produto    = $lista->getProduto();
        $img        = $lista->getImg();
        $id_categoria = $lista->getCategoria();
    }else{
        $descricao  = "";
        $produto    = "";
        $img        = "";
        $id_categoria = "";
    }
?>

<div id="formulario">
	<h2> Cadastro de Categorias </h2>
	<form action="forms/op_produto.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Produto</span>
			<input type="text" name="txt_produto" id="txt_produto" value="<?php echo $produto ?>">
		</label>
		<label>
            <span class="titulo">Categoria </span>
            <!--<input type="text" name="txt_categoria" id="txt_categoria" value="<?php echo $id_categoria ?>"> -->
            <select name="txt_categoria" id="txt_categoria">
                <option value="0">Selecione Uma Categoria</option>
                <?php
                    include_once('classes/combo.php');
                    $cb = new combo();
                    $cb->mostrarCategoria($id_categoria);
                ?>
            </select>
        </label>
        <label>
            <span class="titulo">Imagem </span>
            <input type="text" name="txt_img" id="txt_img" value="<?php echo $img ?>">
        </label>
        <label>
            <span class="titulo">Descrição </span>
            <textarea rows="8" name="txt_descricao" id="txt_descricao" ><?php echo $descricao ?></textarea>
        </label>
        <input type="hidden" name="id" value="<?php  echo $id; ?>" />
        <input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;}else{echo "inserir";} ?>" />
        <input type="submit" value="<?php if ($acao!=""){ echo $acao;}else{echo "inserir";} ?>" class="botao" />
		
		
	</form>


</div>