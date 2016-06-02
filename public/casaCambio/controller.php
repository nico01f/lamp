<?php

require_once 'src/casaDeCambio.php';

$moneda = $_POST['monedas'];
$cantidad = $_POST['cantidad'];
$operacion = $_POST['operaciones'];

$cambiarMoneda = new casaDeCambio(); //Instancia clase para hacer uso de sus propiedades/métodos

if($operacion == "venta"){
  $resul = $cambiarMoneda->venta($moneda, $cantidad);
} else {
  $resul = $cambiarMoneda->compra($moneda, $cantidad);
}

header('Location:totalOperacion.php?resul=' . $resul);
exit;

?>
