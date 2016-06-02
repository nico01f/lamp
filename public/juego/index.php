<?php
// Notificar todos los errores de PHP (ver el registro de cambios)
error_reporting(E_ALL);
require_once('Juego.php');

echo "Hola";
$nuevo_juego = new Juego;
$nuevo_juego('Old Boy', 'd6dsh38392', 34999, 'PC', 1, 4);
$nuevo_juego->getInfoJuego();

 ?>
