<?php
class Usuario {
  public $usuario;
  public $clave;

  protected function saludar() {
    echo "Hola " . $this->usuario;
  }
}

class Administrador extends Usuario {
  public function saludar() {
    echo "Hola admin: " . $this->usuario;
  }

  public function banear($usuario) {
    echo "Has sido baneado " . $usuario->usuario;
  }
}

$admin = new Administrador;
$admin->usuario = "Super nico!";
$admin->saludar();

 ?>
