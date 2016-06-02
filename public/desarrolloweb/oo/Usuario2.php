<?php
class Usuario {
  public $usuario;
  public $clave;

  public function __construct($usuario) {
    $this->clave = "1234";
    $this->usuario = $usuario;
  }

  public function __destruct(){
    echo "Muero...";
  }
}

$usuario = new Usuario("nico");
unset($usuario);
 ?>
