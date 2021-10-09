<?php

class Conexao{
    private $servidor;
    private $usuario;
    private $senha;
    private $banco;

    public function __construct()
    {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->senha = '';
        $this->banco = 'bd_noticias';
    }

    public function conectar(){
        $retorno = false;
        try{
            $retorno = new PDO("mysql:host={$this->servidor};dbname={$this->banco}",
                               $this->usuario, $this->senha);
        }
        catch (PDOException $e){
            echo 'Erro de conexão com o banco de dados';
            echo $e->getMessage();
        }
        return $retorno;
    }
}
