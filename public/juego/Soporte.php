<?php
error_reporting(E_ALL);

// Clase padre
class Soporte {
  private $_titulo;
  private $_codigo;
  private $_precio;

  public function __construct($titulo, $codigo, $precio){
    $this->_titulo = $titulo;
    $this->_codigo = $codigo;
    $this->_precio = $precio;
  }

  public function setTitulo($titulo){
    $this->_titulo=$titulo;
  }

  public function getTitulo(){
    return $this->$titulo;
  }

  public function setCodigo($codigo){
    $this->_codigo = $codigo;
  }

  public function getCodigo(){
    return $this->$codigo;
  }

  public function setPrecio($precio){
    $this->_precio=$precio;
  }

  public function getPrecio(){
    return $this->$precio;
  }
}
?>
