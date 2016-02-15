<?php
    include_once("ConexaoMySql.php");  
    
    class manipulacaoDeDados extends ConexaoMySql
    {
        protected $sql;
        protected $tabela;
        protected $campos;
        protected $dados;
        protected $msg;
        protected $valorNaTabela;
        protected $valorPesquisa;
        //set + Valor do que quer modificar = usa set para modificar e get para receber
        
        public function getSql()
        {
            return $this->sql;
        }
        
        public function setTabela($tbl)
        {
            $this->tabela = $tbl;
        }
        
        public function setCampos($campo)
        {
            $this->campos = $campo;
        }
        
        public function setDados($dado)
        {
            $this->dados = $dado;
        }
        
        public function getMsg()
        {
            return $this->msg;
        }
        
        public function setValorNaTabela($val)
        {
            $this->valorNaTabela = $val;
        }
        
        public function setValorPesquisa($pesq)
        {
            $this->valorPesquisa = $pesq;
        }
        
        public function inserir()
        {
            $this->sql = "Insert into {$this->tabela} ({$this->campos}) VALUES ({$this->dados})";
            if (self::executarSql($this->sql))
            {
                $this->msg = "Registro Inserido Com Sucesso.....";
            }
        }
        
        public function excluir()
        {
            $this->sql = "DELETE FROM {$this->tabela} where {$this->valorNaTabela} = '{$this->valorPesquisa}'";
            if (self::executarSql($this->sql))
            {
                $this->msg = "Excluido Com Sucesso.....";
            }
        }
        
        public function alterar()
        {
            $this->sql = "UPDATE {$this->tabela} set {$this->campos} Where {$this->valorNaTabela} = {$this->valorPesquisa}";
            if (self::executarSql($this->sql))
            {
                $this->msg = "Registro alterado Com Sucesso.....";
            }
        }
    }
?>



















