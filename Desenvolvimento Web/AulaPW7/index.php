<?php
include_once 'funcoes.php'; // inclui o arquivo
$vetor = separarElementos('|', 'CPU Intel i5|Memória DDR|HD SSD|Monitor 14p');
imprimirVetor($vetor);

$nomes = separarElementos(';', 'José;Maria;João;Pedro;Manoel');
imprimirVetor($nomes);

$vetor = ['Pinhal', 'São João', 'Campinas', 'São Paulo', 'Andradas'];
echo juntarElementos('|', $vetor);

$total = contarCaracteres('Etec Dr. Carolino da Motta e Silva');
echo "<br>Total de caract.: $total";

$total = contarCaracteres($vetor, 'ce');
echo "<br>Total de elementos: $total";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>