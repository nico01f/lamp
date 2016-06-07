<?php
require_once 'divisas.php';
class casaDeCambio {
  private $_moneda;
  public list($dolar, $euro) = obtienDivisa();

  public function __construct() {
    $this->_monedas = array
    (
    "peso"=>array("venta"=>1.2, "compra"=>1),
    "dolar"=>array("venta"=>1.6, "compra"=>$dolar),
    "euro"=>array("venta"=>1.7, "compra"=>$euro)
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
