<?php
        $acao   = isset($_GET['acao'])?$_GET['acao']:'';
        $id     = isset($_GET['id'])?$_GET['id']:0;
        
    if ($acao != "" && $id != 0)
    {
        include_once 'classes/buscarDados.php';
        $lista = new buscarDadosBanner();
        $lista->setId($id);
        $lista->mostraDados();
    
        $descricao  = $lista->getDescricao();
        $img        = $lista->getImg();
        $url        = $lista->getUrl();
    }else{
        $descricao  = "";
        $img        = "";
        $url        = "";
    }
?>

<div id="formulario">
	<h2> Cadastro de Banner </h2>
	<form action="forms/op_banner.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Descrição do Banner</span>
			<input type="text" name="txt_descricao" id="txt_descricao" value="<?php echo $descricao ?>">
		</label>
		<label>
            <span class="titulo">Imagem </span>
            <input type="text" name="txt_img" id="txt_img" value="<?php echo $img ?>">
        </label>
        <label>
            <span class="titulo">Url </span>
            <input type="text" name="txt_url" id="txt_url" value="<?php echo $url ?>">
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