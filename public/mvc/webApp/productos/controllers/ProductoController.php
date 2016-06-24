<?php
require_once '../../library/Controller.php';
//require_once 'models/dao/ProductoDao.php';

class ProductoController extends Controller{
	protected function _init(){
		parent::_init();
		//$this->_model = new ProductoDao();
	}

	public function indexAction(){
		switch ($this->_getParam('accion')){
			default:
				return $this->_listadoAction();
		}
	}

	private function _listadoAction(){
		$this->_view->setAttribute("titulo","Bienvenido");
		return $this->_view->render("index");
	}
}
