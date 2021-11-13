
<?php
include 'conexao.php';

//Classe CRUD
class Usuarios extends Conexao
{

  private $con;

  public $id;
  public $nome;
  public $email;

  public function __construct()
  {
    parent::__construct();
    $this->con = $this->conectar();
  }

  public function index()
  {
    //Retorna todos os dados select
  }

  public function create()
  { //Exibe pagina inserir dados

  }

  public function store()
  { //Armazenar dados

  }

  public function show()
  { //Listar um unico registro

  }

  public function edit()
  { //Exibi uma pagina para editar um registro

  }

  public function update()
  {
    //Armazena somente um registro alterado
  }

  public function delete()
  {
    //Deleta um registro
  }
}
