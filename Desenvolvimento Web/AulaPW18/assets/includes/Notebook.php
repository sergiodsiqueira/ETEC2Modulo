<?php
namespace Includes;

include 'computador.php';

class Notebook extends Computador
{

  private $bateria;

  function __construct()
  {
    parent::__construct();
    $this->bateria = '2 amp';
  }

  function set_bateria($value)
  {
    $this->bateria = $value;
  }
  function get_bateria()
  {
    return $this->bateria;
  }
}

$acer = new Notebook();
$acer->set_serial('300000');
$acer->set_bateria('1000 ahm');
echo $acer->get_serial() . '<br>' . $acer->get_bateria();
