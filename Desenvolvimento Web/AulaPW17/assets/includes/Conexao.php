<?php
namespace Includes;

use PDO;
use PDOException;

class Conexao {

    // atributos da classe
    private $servidor;
    private $usuario;
    private $senha;
    private $banco;

    private $token;

    // construtor da classe
    public function __construct() {
        $this->servidor = 'localhost';
        $this->usuario  = 'root';
        $this->senha    = '';
        $this->banco    = 'bd_noticias'; 
    }

    public function conectar() {
        $retorno = false;
        try {
            $retorno = new PDO("mysql:host={$this->servidor};dbname={$this->banco}", 
                               $this->usuario, $this->senha);
        } catch (PDOException $e) {
            echo 'Erro de conexão com o banco de dados.';
            echo $e->getMessage();
        }
        return $retorno;
    }

    public function setToken() {
        $this->token = hash('sha256', random_int(1, 1000000) . date('H:i:s'));
        session_start();
        $_SESSION['token'] = $this->token;
    }

}
