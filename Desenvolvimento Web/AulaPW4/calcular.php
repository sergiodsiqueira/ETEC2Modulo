<?php
if (
  isset($_POST['valor1']) &&
  isset($_POST['valor2']) &&
  isset($_POST['operador'])
) {
  extract($_POST, EXTR_PREFIX_ALL, 'xyz');
  switch ($xyz_operador) {
    case '+':
      $total = $xyz_valor1 + $xyz_valor2;
      break;
    case '-':
      $total = $xyz_valor1 - $xyz_valor2;
      break;
    case '*':
      $total = $xyz_valor1 * $xyz_valor2;
      break;
    case '/':
      $total = $xyz_valor1 / $xyz_valor2;
      break;
    default:
      $total = 'Operador inválido!';
      break;
  };

  echo $total;
}
