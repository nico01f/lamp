<?php

class Producto {
  public $nombre;
  public $precio;
  protected $estado;

  protected function set_estado_producto($estado){
    $this->estado = $estado;
  }

  function __construct(){
    $this->set_estado_producto('en uso');
    print "Producto en uso...<br>";
  }

  function __destruct(){
    $this->set_estado_producto('liberado');
    print "El objeto ha sido liberado...";
  }
}


$nuevo_producto = new Producto();
?>
