<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Teste de Idade</title>

    <style>
        img {height: 150px; border: 1px; padding: 4px;}
    </style>

</head>
<body>
    <?php
        $ano_atual = 2021;
        $ano_nascto = 1982;
        $idade = $ano_atual - $ano_nascto;
        
        if ($idade >= 0 && $idade < 12)
            echo "<img src='img/crianca.png' alt=''><br>";
        else if ($idade >= 12 && $idade < 18)
            echo "<img src='img/adolescente.png' alt=''><br>";
        else if ($idade >= 18 && $idade < 70)
            echo "<img src='img/adulto.png' alt=''><br>";
        else if ($idade >= 70)
            echo "<img src='img/idoso.png' alt=''><br>";
        else
            echo 'Idade inválida<br>';
        
    ?>
</body>
</html>