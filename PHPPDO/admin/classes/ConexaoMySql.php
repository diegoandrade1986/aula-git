<?php
    abstract class ConexaoMySql 
    // Essa Irá ser uma classe abstrata nao pode instacia-la somente herdar os valores dela
    {
        //Criando as variaveis protegidas
        protected $servidor;
        protected $usuario;
        protected $senha;
        protected $banco;
        protected $conexao;
        protected $dados;
        protected $qry;
        
        function __construct()
        {
            $this->servidor = "localhost";
            $this->usuario  = "root";
            $this->senha    = "";
            $this->banco    = "exemploFinal";
            self::conectar(); // USANDO self PARA CHAMAR DA PROPRIA CLASSE
        }
        function conectar()
        {
            try 
            {
                $pdo = new PDO("mysql:host=$this->servidor;dbname=$this->banco",$this->usuario,$this->senha);
                //Passando 3 parametros o host e o tipo de banco de dados 2 usuario e 3 nome do banco   
            } catch (PDOException $e) {
                // Mostrando a mensagem de erro
                echo $e->getMessage();
                //Mostrando o Código de Erro
                //echo $e->getCode();
            }
        }
        
        function executarSql($sql)
        {
            $this->qry = @mysqli_query($this->conexao,$sql) or die ("Erro ao Executar o Comando SQL");
            return $this->qry;
        }
        
        function listar($qr)
        {
            $this->dados = @mysqli_fetch_assoc($qr);
            return $this->dados;
        }
    }
 
 ?>