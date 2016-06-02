<?php

class Usuario {
  public $usuario;
  public $password;

  public function saludar(){
    echo "Hola " . $this->usuario . "!";
  }

}
$usuarios = null;
$usuarios[] = new Usuario;
$usuarios[] = new Usuario;
$usuarios[0]->usuario = "Nico";
$usuarios[1]->usuario = "Vale";

foreach ($usuarios as $usuario) {
  echo "<br />" . $usuario->saludar();
}

?>
