<?php
    include_once 'ConexaoMySql.php';
    //
    class buscarDadosCategoria extends ConexaoMySql
    {
      private $id, $categoria, $ativo;
      
      public function setId($id)
      {
          $this->id = $id;
      }
      public function getCategoria()
      {
          return $this->categoria;
      }
      public function getAtivo()
      {
          return $this->ativo;
      }
      public function mostraDados()
      {
          $sql = "Select * From categoria where id_categoria = {$this->id}";
          $qry = self::executarSql($sql);
          $linha = self::listar($qry);
          $this->categoria = $linha['categoria'];
          $this->ativo = $linha['ativo'];
      }  
    }
    class buscarDadosBanner extends ConexaoMySql
    {
      private $id, $descricao, $img, $url, $qtdeClique;
      
      public function setId($id)
      {
          $this->id = $id;
      }
      public function getDescricao()
      {
          return $this->descricao;
      }
      public function getImg()
      {
          return $this->img;
      }
      public function getUrl()
      {
          return $this->url;
      }
      public function getQtdeClique()
      {
          return $this->qtdeClique;
      }
      public function mostraDados()
      {
          $sql = "Select * From banner where id_banner = {$this->id}";
          $qry = self::executarSql($sql);
          $linha = self::listar($qry);
          $this->descricao  = $linha['descricao'];
          $this->img        = $linha['img'];
          $this->url        = $linha['url'];
          $this->qtdeClique = $linha['qtdclique'];
          
      }  
    }
    class buscarDadosProduto extends ConexaoMySql
    {
      private $id, $produto, $img, $categoria, $descricao;
      
      public function setId($id)
      {
          $this->id = $id;
      }
      public function getDescricao()
      {
          return $this->descricao;
      }
      public function getImg()
      {
          return $this->img;
      }
      public function getCategoria()
      {
          return $this->categoria;
      }
      public function getProduto()
      {
          return $this->produto;
      }
      public function mostraDados()
      {
          $sql = "Select * From produto where id_produto = {$this->id}";
          $qry = self::executarSql($sql);
          $linha = self::listar($qry);
          $this->categoria  = $linha['id_categoria'];
          $this->descricao  = $linha['descricao'];
          $this->img        = $linha['img'];
          $this->produto    = $linha['produto'];
      }  
    }
    
 ?>