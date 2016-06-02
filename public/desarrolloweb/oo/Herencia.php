<?php
class Usuario {
  public $usuario; //metodo
  public $clave;  //metodo

  public function saludar() { //propiedad
    echo "Hola " . $this->usuario;
  }
}

class Administrador extends Usuario { //clase administrador hereda sobre Usuario
  public function banear($usuario) {
    echo $usuario->usuario . " ha sido baneado";
  }
}

$usuario = new Usuario;
$usuario->usuario = "nico";
$admin = new Administrador;
$admin->usuario = "Super F.";
$admin->saludar();
echo "<br />";
$admin->banear($usuario);
?>
