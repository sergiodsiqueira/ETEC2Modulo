<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 | Desenvolvimento Web</title>
</head>

<body>
    <?php
    //Função Simples
    function PularLinhas()
    {
        echo '<br>';
        echo '<br>';
    };

    //variavel
    $mensagem = '<span style="color:red">Boa noite!</span>';
    $mensagem2 = '<span style="color:blue">ETEC 2021</span>';

    //echo $mensagem . ' ' . $mensagem2; // '.' o ponto concatena no PHP
    echo "$mensagem $mensagem2 Turma DS"; // entre "" ele concatena direto
    PularLinhas();

    $mensagem3 =  "<div style='background: silver; float: left; width: 200px'>
                   <span style='color:white'>Isto é uma DIV</span> $mensagem $mensagem2
                  </div>";
    echo $mensagem3;
    PularLinhas();
    PularLinhas();

    $valor1 = 1000;
    $valor2 = 110.65;
    $total = $valor1 + $valor2;
    echo "<div> $valor1 + $valor2 = $total </div>";
    PularLinhas();

    $vetor = ['Pinhal', 'Jacutinga', 'SJBV'];
    echo $vetor[1];
    PularLinhas();


    $estados = ['SP', 'RJ', 'MG', 'AC'];
    for ($i = 0; $i <= count($estados) - 1; $i++) {
        echo "<div>$estados[$i];</div>";
    };
    PularLinhas();

    foreach ($estados as $estado) {
        echo "$estado, ";
    };
    PularLinhas();

    $componentes = [1 => 'VGA', 2 => 'SOUND', 3 => 'KEYBOARD'];
    $componentes = array_merge($componentes, [4 => 'MOUSE', 5 => 'SOUNDBOX']);
    foreach ($componentes as $chave => $componente) {
        echo "$chave : $componente, <br>";
    };
    PularLinhas();

    ?>
</body>

</html>