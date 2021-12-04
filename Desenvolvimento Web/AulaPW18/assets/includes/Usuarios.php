<?php

namespace Includes;

use PDO;
use PDOException;

// Classe CRUD tabela usuarios

class Usuarios extends Conexao
{

    private $con;

    public function __construct()
    { // 1º método - execução automática
        parent::__construct();
        $this->con = $this->conectar();
    }

    public function index($limite, $offset)
    { // Read
        // retorna os todos os dados após um SELECT
        $sql = "SELECT id, nome, email, nivel FROM usuario LIMIT {$limite} OFFSET {$offset}";
        $res = false;

        try {
            $res = $this->con->query($sql, PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            //echo $ex->getMessage();
        }

        if ($res) {
            if ($res->rowCount() > 0)
                return json_encode(['msg' => 'OK', 'dados' => $res->fetchAll()]);
            else
                return json_encode(['msg' => 'Não há dados para serem exibidos']);
        } else {
            return json_encode(['msg' => 'Erro']);
        }
    }

    public function create()
    { // 1ª etapa - Create - tela com inputs
        // Exibe uma página para inserir dados
        return json_encode(['msg' => 'OK']);
    }

    public function store()
    { // 2ª etapa - Create - armazenamento
        $res = false;

        if (
            isset($_POST['nome']) && isset($_POST['email']) &&
            isset($_POST['senha']) && isset($_POST['nivel']) &&
            isset($_POST['_token'])
        ) {

            extract($_POST); // cria dinamicamente as variáveis do POST

            //validar token

            $sql = "INSERT INTO usuario (nome, email, senha, nivel) 
                    VALUES ('$nome', '$email', SHA1('$senha'), '$nivel')";
            $res = $this->con->query($sql);
        }

        if ($res) {
            return json_encode(['msg' => 'OK', 'mensagem' => 'Usuário cadastrado com sucesso']);
        } else {
            return json_encode(['msg' => 'Erro', 'mensagem' => 'Impossivel cadastrar o usuário']);
        }
    }

    public function show($id)
    {
        // Listar / Exibir um registro por vez
        $sql = "SELECT id, nome, email, nivel FROM usuario WHERE id={$id}";
        $res = false;

        try {
            $res = $this->con->query($sql, PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            //echo $ex->getMessage();
        }

        if ($res) {
            if ($res->rowCount() > 0)
                return json_encode(['msg' => 'OK', 'dados' => $res->fetchAll()]);
            else
                return json_encode(['msg' => 'Não há dados para serem exibidos']);
        } else {
            return json_encode(['msg' => 'Erro']);
        }
    }

    public function edit($id)
    {
        // Validar se usuário com o id informado existe na tabela
        $sql = "SELECT id, nome, email, nivel FROM usuario WHERE id={$id}";
        $res = $this->con->query($sql);

        if ($res) {
            return json_encode(['msg' => 'OK', 'dados' => json_encode($res->fetchAll())]);
        } else {
            return json_encode(['msg' => 'Erro']);
        }
    }

    public function update()
    {
        $res = false;

        if (
            isset($_POST['_method']) && ($_POST['_method'] == 'PUT') &&
            isset($_POST['id']) && isset($_POST['nome']) &&
            isset($_POST['email']) && isset($_POST['senha']) &&
            isset($_POST['nivel']) && isset($_POST['_token'])
        ) {

            extract($_POST); // cria dinamicamente as variáveis do POST

            // Validar se usuário com o id informado existe na tabela
            $sql = "SELECT id, nome, email, nivel FROM usuario WHERE id={$id}";
            $res = $this->con->query($sql);

            if ($res) { // se for diferente de false/nulo continua
                // validar o token
                if ($senha == '') {
                    $sql = "UPDATE usuario 
                            SET nome='$nome', email='$email', nivel='$nivel' 
                            WHERE id={$id}";
                } else {
                    $sql = "UPDATE usuario 
                            SET nome='$nome', email='$email', senha=SHA1('$senha'), nivel='$nivel' 
                            WHERE id={$id}";
                }
                $res = $this->con->query($sql);
            }

            if ($res) {
                return json_encode(['msg' => 'OK']);
            } else {
                return json_encode(['msg' => 'Erro']);
            }
        }
    }

    public function destroy()
    {
        session_start();

        if (
            isset($_POST['method']) && ($_POST['method'] == 'DELETE') &&
            isset($_POST['_token']) && ($_POST['_token'] == $_SESSION['token']) &&
            isset($_POST['id']) && ($_POST['id'] != '')
        ) {

            $sql = "DELETE FROM usuario WHERE id=" . $_POST['id'];
            $res = $this->con->query($sql);

            if ($res) {
                return json_encode(['msg' => 'OK']);
            } else {
                return json_encode(['msg' => 'Erro']);
            }
        }
    }

    public function getNumRegistros()
    {
        $sql = 'SELECT COUNT(*) AS total FROM usuario';
        $res = $this->con->query($sql, PDO::FETCH_ASSOC);
        $linhas = 0;
        if ($res) {
            foreach ($res->fetchAll() as $row) {
                $linhas = $row['total'];
            }
        }
        return $linhas;
    }
}

/*
$usuario = new Usuarios(); // instanciando a classe e criando o objeto

if (isset($_POST) && !isset($_POST['method'])) {
    $usuario->store(); // insere um novo usuário
}

$json = json_decode($usuario->index()); // retorna todos os registros da tabela usuarios
$json = json_decode($usuario->show(1)); // retorna somente um registro da tabela usuarios

echo $json->msg . '<br>';

if ($json->msg == 'OK') {
    //echo $json->usuarios[0]->nome;
    echo "<table border='1' cellpadding='0' cellspacing='0'>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Nível</th>
            </tr>";
    $i = 0;
    foreach($json->dados as $row) {
        echo ($i%2 ? "<tr style='background: silver'>" : "<tr>");
        $i++;
        echo  "<td>{$row->id}</td> 
               <td>{$row->nome}</td>
               <td>{$row->email}</td>
               <td>{$row->nivel}</td>
              </tr>";
    }
    echo "</table>";
} else if ($json->msg == 'Erro') {
    echo 'Personalize o erro';
}

//var_dump($json);

<form method="POST" action="Usuarios.php">
    Nome: <input type="text" name="nome"> <br>
    E-mail: <input type="email" name="email"> <br>
    Senha: <input type="password" name="senha"> <br>
    Nível: <input type="text" name="nivel" value="U"> <br>
    <button type="submit">Gravar</button>
</form>
*/
