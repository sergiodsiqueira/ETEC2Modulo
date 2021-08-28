<?php

    $msg = '';
    if (
    isset($_POST['codigo']) &&
    isset($_POST['descricao']) &&
    isset($_POST['valor'])) {

    extract($_POST);

    session_start();

    $idx = 0;
    if (isset($_SESSION['idx'])){
        $idx = $_SESSION['idx'] + 1;
        $_SESSION['idx'] = $idx;
    } else {
        $_SESSION['idx'] = 0;
    };

    $_SESSION['produto'][$idx] = ['codigo'=>$codigo, 'descricao'=>$descricao, 'valor'=>$valor];

     for ($i = 0; $i <= $idx; $i++) {
        $produto = $_SESSION['produto'][$i];
        $msg .= $produto['codigo'] . '-' . $produto['descricao']. '-' . $produto['valor']. '<BR>';
    };
    };
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for=""> Código:
            <input type="text" name="codigo" maxlength="10">
        </label><br>

        <label for=""> Descrição:
            <input type="text" name="descricao" maxlength="50">
        </label><br>

        <label for=""> Valor:
            <input type="text" name="valor" maxlength="10">
        </label><br><br>

        <button type="submit"> INCLUIR </button>
    </form>

    <?php echo $msg; $_POST = []?>
</body>

</html>