<?php
    include_once 'ConexaoMySql.php';
    class combo extends ConexaoMySql
    {
        public function mostrarCategoria($id)
        {
            $sql = "SELECT id_categoria, categoria from categoria";
            $qry = self::executarSql($sql);
            while ($linha = self::listar($qry)) {
                if($id == $linha['id_categoria']) $selecionado = "selected='selected'";
                else $selecionado = "";
                echo "<option value='{$linha['id_categoria']}' {$selecionado} >{$linha['categoria']}</option>";
            }    
        }
        
    }
 ?>