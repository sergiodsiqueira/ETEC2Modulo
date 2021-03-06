<?php
include '../vendor/autoload.php';

use Includes\Conexao;

require 'validar.php';

$conexao = new Conexao();
$con = $conexao->conectar();
$linhas_tabelas = '';

if ($snivel == 'U') {

    $sql = "SELECT n.*, u.nome FROM noticia n, usuario u 
                WHERE n.id_usuario = {$sid} AND 
                n.id_usuario = u.id                
                ORDER BY n.data_cadastro DESC";
} else {
    $sql = "SELECT n.*, u.nome FROM noticia n, usuario u 
                WHERE n.id_usuario = u.id 
                ORDER BY n.data_cadastro DESC";
}

$res = $con->query($sql);

if ($res) {
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        $editar = "<a href='manut_noticia.php?id={$row['id']}&acao=E'
                       class='btn btn-primary'>Editar</a>";
        $deletar = "<a href='manut_noticia.php?id={$row['id']}&acao=D'
                       class='btn btn-danger'>Deletar</a>";

        $foto = "../assets/imagens/{$row['foto']}";
        $datacad = date_format(date_create($row['data_cadastro']), 'd/m/Y H:i:s');
        $dataexp = date_format(date_create($row['data_expiracao']), 'd/m/Y H:i:s');
        $situacao = $row['situacao'] == 'I' ? 'Inativo' : 'Ativo';

        $linhas_tabelas .= "<tr>
                                    <td>$editar</td>
                                    <td>$deletar</td>";

        if ($snivel != 'U') {
            $linhas_tabelas .=     "<td>{$row['id']}</td>
                                    <td>{$row['id_usuario']}</td>
                                    <td>{$row['nome']}</td>";
        }

        $linhas_tabelas .=      "<td>{$row['titulo']}</td>
                                    <td>{$row['descricao']}</td>
                                    <td><img src='$foto' alt='' style='height:30px'></td>
                                    <td>{$datacad}</td>
                                    <td>{$dataexp}</td>
                                    <td>{$situacao}</td>
                              </tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once 'header.php'; ?>
</head>

<body>
    <!-- topo -->
    <?php include_once 'topo.php'; ?>
    <?php include_once 'menu.php'; ?>

    <!-- main -->
    <div class="p-3 main">
        <h3> Cadastro de Not??cias</h3>

        <table class="table table-striped w-100">
            <tr>
                <th colspan="2">A????es</th>
                <?php if ($snivel != 'U') { ?>
                    <th>Id</th>
                    <th>Id Usu??rio</th>
                    <th>Nome de Usu??rio</th>
                <?php } ?>
                <th>Titulo</th>
                <th>Descri????o</th>
                <th>Foto</th>
                <th>Data de Cadastro</th>
                <th>Data de Expira????o</th>
                <th>Situa????o</th>
            </tr>
            <?php echo $linhas_tabelas; ?>
        </table>

    </div>

    <!-- rodap?? -->
    <?php include_once 'rodape.php'; ?>
    <!-- rodap?? -->
    <?php include_once 'rodape.php'; ?>
</body>

</html>