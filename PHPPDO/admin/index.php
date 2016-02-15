<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Programacão Orientada a objeto </title>
<link href="css/css.css" rel="stylesheet" />
</head>
<body>
	<div id="principal">
		<div id="cabecalho">
			<?php include_once("cabecalho.php"); ?>
		</div><!--fim topo -->
		<div id="corpo">
			<nav id="esquerdo">
				<?php include_once("menu.php"); ?>
			</nav>
			
			<div id="direito">
				<?php
				    $link = isset($_GET["link"])?$_GET["link"]:"1";
                    $pag[1] = "home.php";
					$pag[2] = "forms/lst_categoria.php";
					$pag[3] = "forms/frm_categoria.php";
					$pag[4] = "forms/lst_produto.php";
                    $pag[5] = "forms/frm_produto.php";
					$pag[6] = "forms/lst_banner.php";
					$pag[7] = "forms/frm_banner.php";
					if (!empty($link)){
						if(file_exists($pag[$link]))
						{
							include $pag[$link];
                            
						}
						else
						{
						    include "home.php";
						}
					
					}else{
					   
						include "home.php";
					}
				
				?>
			</div>
		</div>
	</div>
</body>	
</html>