<?php

class Computador
{
  private $velocidade;
  private $serial;
  public $fabricante;

  public function __construct()
  {
    $this->velocidade = '2.5 Ghz';
    $this->serial = '123456';
  }

  function get_serial()
  {
    return $this->serial;
  }

  function set_serial($value)
  {
    $this->serial = $value;
  }
}

// $imac = new Computador();
// $imac->fabricante = 'Dell';
// echo $imac->get_serial() . '<br>';
// echo $imac->fabricante;

// $imac->set_serial('GZP12OP2');
// echo $imac->get_serial() . '<br>';
