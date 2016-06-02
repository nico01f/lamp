<?php
function porreferencia(&$cadena){
  $cadena = "Si cambia";
}

$str = "Esto es una cadena";

porreferencia($str);
echo $str;
 ?>
