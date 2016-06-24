<?php
require_once ('divisas.php');
class casaDeCambio {
  private $_moneda;
  public list($dolar, $euro) = obtieneDivisa();

  public function __construct() {
    
    $this->_monedas = array
    (
    "peso"=>array("venta"=>1.2, "compra"=>1),
    "dolar"=>array("venta"=>1.6, "compra"=>$this->dolar),
    "euro"=>array("venta"=>1.7, "compra"=>$this->euro)
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
