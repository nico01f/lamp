<?php
function obtieneDivisa() {
  $xmlSource = "http://indicadoresdeldia.cl/webservice/indicadores.xml";
  $xml = simplexml_load_file($xmlSource);
  $dolar =  substr($xml->moneda->dolar, 1,3);
  $euro =  substr($xml->moneda->euro, 1,3);
  return array($dolar, $euro);
}
?>
