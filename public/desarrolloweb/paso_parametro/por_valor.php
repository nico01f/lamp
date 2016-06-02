<?php

function porvalor ($parametro){
  $parametro = "por valor";
  echo "<br />" . $parametro;
}

$mivariable = "este no cambia";
porvalor($mivariable);
echo "<br />" . $mivariable;

 ?>
