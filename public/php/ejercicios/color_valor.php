<?php

$valor = $_POST["valor"];

color_valor($valor);

function color_valor($val){
  if ($val % 2 == 0) {
    echo '<h3 style="color: #f8f">' . $val . '</h3>';
  }else {
      echo '<h3 style="color: #888">' . $val . '</h3>';
    }
}




 ?>
