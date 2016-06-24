<?php
require_once '../../library/View/AbstractView.php';

class View extends AbstractView {
	const EXTENSION_VIEW="phtml";

	public function render ($viewName){
		$path="views/".$viewName.".".self::EXTENSION_VIEW;
		if(!file_exists($path)){
			throw new Exception("La vista de nombre $viewName, con la ruta $path no extiste en el proyecto");
		}
		ob_start();
		include($path);
		$outputHtml = ob_get_contents();
		ob_clean();
		return $outputHtml;
	}

}