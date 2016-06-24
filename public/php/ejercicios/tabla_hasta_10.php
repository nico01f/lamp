<?php
define(TAM, 5);
$e = 1;

for ($i=1; $i <= TAM; $i++) {
  echo '<h1 style="color: #fff; background: #000">=======</h1><br>';
  for ($e=1; $e <= 10; $e++) {
    echo $i . "x". $e . "=". $i*$e . "<br>";

  }
}

 ?>
