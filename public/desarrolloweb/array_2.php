<?

$entrada = array("Nico", "Pepe", "Alberto", "Diego", "Simon");

$salida = array_slice($entrada, 0, 3);

foreach ($salida as $actual) {
  echo "<li>$actual</li>";
}

echo "<p>";

$salida = array_slice($salida, 1);

foreach ($salida as $actual){
  echo "<li>$actual</li>";
}

?>
