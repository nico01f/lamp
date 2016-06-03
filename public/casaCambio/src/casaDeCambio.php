<?php
class casaDeCambio {
  private $_moneda;

  public function __construct() {
    $this->_monedas = array
    (
    "peso"=>array("venta"=>1.2, "compra"=>1),
    "dolar"=>array("venta"=>1.6, "compra"=>693),
    "euro"=>array("venta"=>1.7, "compra"=>773)
  );
}

public function venta($moneda, $cantidad) {
  return ($this->_monedas[$moneda]['venta'] * $this->_monedas[$moneda]['compra']) * $cantidad;
}

public function compra($moneda, $cantidad) {
  return ($this->_monedas[$moneda]['compra'] * $cantidad);
}
}
?>
