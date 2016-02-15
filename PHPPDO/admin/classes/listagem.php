<?php
    include_once 'ManipulacaoDeDados.php';
    class listagem extends manipulacaoDeDados
    {
        public function listarCategoria()
        {
            $qry = self::executarSql("SELECT * FROM categoria");
            while ($linha = self::listar($qry))
            {
                echo "<tr>
                        <td>{$linha['id_categoria']}</td>
                        <td>{$linha['categoria']}</td>
                        <td>{$linha['ativo']}</td>
                        <td><a href='index.php?link=3&acao=alterar&id={$linha['id_categoria']}'><img src='imagens/alterar.gif'/></a></td>
                        <td><a href='index.php?link=3&acao=excluir&id={$linha['id_categoria']}'><img src='imagens/excluir.gif'/></a></td>
                    </tr>";
            }
        }
        public function listarProduto()
        {
            $qry = self::executarSql("SELECT * FROM produto");
            while ($linha = self::listar($qry))
            {
                echo "<tr>
                        <td>{$linha['id_produto']}</td>
                        <td>{$linha['produto']}</td>
                        <td>{$linha['img']}</td>
                        <td>{$linha['descricao']}</td>
                        <td><a href='index.php?link=5&acao=alterar&id={$linha['id_produto']}'><img src='imagens/alterar.gif'/></a></td>
                        <td><a href='index.php?link=5&acao=excluir&id={$linha['id_produto']}'><img src='imagens/excluir.gif'/></a></td>
                    </tr>";
            }
        }
        public function listarBanner()
        {
            $qry = self::executarSql("SELECT * FROM banner");
            while ($linha = self::listar($qry))
            {
                echo "<tr>
                        <td>{$linha['id_banner']}</td>
                        <td>{$linha['descricao']}</td>
                        <td>{$linha['url']}</td>
                        <td><a href='index.php?link=7&acao=alterar&id={$linha['id_banner']}'><img src='imagens/alterar.gif'/></a></td>
                        <td><a href='index.php?link=7&acao=excluir&id={$linha['id_banner']}'><img src='imagens/excluir.gif'/></a></td>
                    </tr>";
            }
        }
    }
 ?>