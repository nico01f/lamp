<?php
error_reporting(E_ALL);
require_once('Soporte.php')

class Juego extends Soporte{
  private $_consola;
  private $_minJugadores;
  private $_maxJugadores;

  public function __construct($titulo, $codigo, $precio, $consola, $minJugadores, $maxJugadores){
    parent::__construct($titulo, $codigo, $precio);
    $this->_consola = $consola;
    $this->_minJugadores = $minJugadores;
    $this->_maxJugadores = $maxJugadores;
  }
  public function getJugadoresPosibles(){
    return 'De'. $this->_minJugadores . 'hasta' . $this->maxJugadores . 'jugadores';

  }
  public function getInfoJuego(){
    return '<br /> - Titulo:' . $this->titulo . '<br /> - Codigo: ' . $this->codigo . '<br /> - Precio: ' . $this->precio;s
  }
}


?>
