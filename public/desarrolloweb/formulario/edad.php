<?php
$arra = $_POST["datos"];

if ($arra["edad"] < 18) {
  echo "Hola " . $arra["nombre"];
  echo "<br>";
  echo "No puedes ingresar...";
} else {
  echo "Hola " . $arra["nombre"];
  echo "<br>";
  echo "Puedes ingresar...";
}

?>
