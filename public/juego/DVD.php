<?php
error_reporting(E_ALL);

require_once('Soporte.php')
class DVD extends Soporte {
  private $_idiomas;
  private $_subtitulos;
  private $_portada;
  private $_duracion;

  public function __construct($titulo, $codigo, $precio, $idiomas, $subtitulos, $portada, $duracion){
    parent::__construct($titulo, $codigo, $precio);
    $this->_idiomas = $idiomas;
    $this->_subtitulos = $subtitulos;
    $this->_portada = $portada;
  }

  public function getInfoDVD(){
    return '<br /> - Titulo: ' . $this->$titulo . '<br /> - Idiomas: ' . $this->$idiomas .
        '<br /> - Subtitulos' . '<br /> - Duracion: ' . $this->->$duracion;
  }
}

?>
