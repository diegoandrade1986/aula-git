<?php
    $acao   = isset($_GET['acao'])?$_GET['acao']:'';
    $id     = isset($_GET['id'])?$_GET['id']:0;
    
    if ($acao != "" && $id != 0)
    {
        include_once 'classes/buscarDados.php';
        $lista = new buscarDadosCategoria();
        $lista->setId($id);
        $lista->mostraDados();
    
        $categoria  = $lista->getCategoria();
        $ativo      = $lista->getAtivo();
    }else{
        $categoria  = "";
        $ativo      = "";
    }
?>

<div id="formulario">
	<h2> Cadastro de Categorias </h2>
	<form action="forms/op_categoria.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Titulo da Categoria</span>
			<input type="text" name="txt_categoria" id="txt_categoria" value="<?php echo $categoria ?>">
		</label>
		<label>
            <span class="titulo">Ativo </span>
            <input type="text" name="txt_ativo" id="txt_ativo" value="<?php echo $ativo ?>">
        </label>
        <input type="hidden" name="id" value="<?php  echo $id; ?>" />
        <input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;}else{echo "inserir";} ?>" />
        
		<!--
		<div class="dois-campos">
			<label>
				<span class="titulo">Ordem </span>
				<input type="text" name="txt_ordem" id="txt_ordem" value="<?php //echo $txt_ordem ?>">
			</label>
			<label>
				<span class="titulo">Ativo </span>
				<select name="txt_ativo" id="txt_ativo">
					<option value="S" <?php if($txt_ativo=="S")echo "selected" ?>> Sim </option>
					<option value="N" <?php if($txt_ativo=="N")echo "selected" ?>> Não </option>
					
				</select>
			</label>
		</div>
		
		<input type="hidden" name="id" value="<?php  echo $id; ?>" />
		<input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" />
		
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		-->
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;}else{echo "inserir";} ?>" class="botao" />
		
		
	</form>


</div>