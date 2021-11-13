<?php
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=bd_noticias', 'root', 'mysql')
               or die('Erro de conexão com BD');
    
    $sql = "SELECT * FROM noticia ORDER BY data_cadastro";

    $res = $conexao->query($sql); // query executa a consulta SQL

    if ($res) {
        while($row = $res->fetch()) {
            echo  'Id da notícia: '        . $row['id']            . ' - ' . 
                  'Id do usuário: '        . $row['id_usuario']    . ' - ' . 
                  'Título da notícia: '    . $row['titulo']        . ' - ' . 
                  'Descrição da notícia: ' . $row['descricao']     . ' - ' . 
                  'Data de cadastro: '     . $row['data_cadastro'] . '<br>';
        }
    }

    if (isset($_POST['id']) && isset($_POST['titulo']) && 
        isset($_POST['descricao']) && !isset($_POST['idnoticia'])) {
        extract($_POST); // extrai as variáveis do POST e transforma em variáveis globais

        $sql = "INSERT INTO noticia (id_usuario, titulo, descricao)
                 VALUES 
                ({$id}, '{$titulo}', '{$descricao}')";
        $res = $conexao->query($sql); // query executa a inserção SQL
        if ($res) {
            echo $res->rowCount() . ' Registro(s) inserido(s) com sucesso!';
        }
    }
    //echo 'Variável global ' . $titulo;

    if (isset($_POST['id']) && isset($_POST['titulo']) && 
        isset($_POST['descricao']) && isset($_POST['idnoticia'])) {
        extract($_POST); // extrai as variáveis do POST e transforma em variáveis globais
        $sql = "UPDATE noticia SET id_usuario={$id}, titulo = '{$titulo}', descricao = '{$descricao}' 
            WHERE id={$idnoticia}";

        $res = $conexao->query($sql);

        if ($res) {
            echo $res->rowCount() . ' Registro(s) atualizado(s) com sucesso!';
        }
    }
?>
    <h3>Formulário de inserção</h3>
    <form method="post" action="noticias.php">
        Id do usuário: <input type="text" name="id" id="id"> <br>
        Título da notícia: <input type="text" name="titulo" id="titulo"> <br>
        Descrição da notícia: <input type="text" name="descricao" id="descricao"> <br>
        <input type="submit" value="Gravar">
    </form>
    <hr>
    <h3>Formulário de atualização</h3>
    <form method="post" action="noticias.php">
        Id da notícia: <input type="text" name="idnoticia" id="idnoticia"> <br>
        Id do usuário: <input type="text" name="id" id="id"> <br>
        Título da notícia: <input type="text" name="titulo" id="titulo"> <br>
        Descrição da notícia: <input type="text" name="descricao" id="descricao"> <br>
        <input type="submit" value="Gravar">
    </form>