<?php

$local = 100;
$local1 = 100;

function soma($pValor)
{
  $local = 100;
  return ($local + $pValor + $GLOBALS['local'] + $GLOBALS['local1']);
}

function subtracao($pValor1, $pValor2)
{
  echo $pValor1 - $pValor2 - $GLOBALS['local'];
}


echo soma(100);
echo "\n";
subtracao(1200, 1000);
echo "\n";
echo 'O nome do arquivo é:' . $_SERVER['PHP_SELF'] . "\n";
echo 'Nome do servidor:' . $_SERVER['SERVER_NAME'] . "\n";
