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
echo "<br>Total de elementos: $total<br>";

$nome = '  José Silva Pereira  ';
$sobrenome = strstr(trim($nome), ' ');
echo $sobrenome . '<br>';

$numero = 1279345600.456767676768 / 2.72545454545;

$retorno = formataNumero($numero) . '<br>';
echo $retorno;

$retorno = formataNumero($retorno, '');
echo $retorno . '<br>';

$palavra = maiusculaMinuscula('sao paulo', '');
echo $palavra . '<br>';

$palavra = maiusculaMinuscula('SAO PAULO');
echo $palavra . '<br>';
//'ãéêíõôú';
//'ÃÉÊÍÕÔÚ';
echo dataAtual();

$data_indep = date_create('1980-04-14');
$data_atual = date_create(date('Y-m-d'));
$intervalo  = $data_indep->diff($data_atual);
echo $intervalo->days . ' dias';

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