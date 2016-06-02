<?php
class casaDeCambio {
  private $_moneda;

  public function __construct() {
    $this->_monedas = array
    (
    "peso"=>array("venta"=>1.2, "compra"=>1),
    "dolar"=>array("venta"=>1.4, "compra"=>100),
    "euro"=>array("venta"=>1.5, "compra"=>750)
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
