<?php
require_once '../../library/View.php';

abstract class Controller {

	protected $_view;
	protected $_model;

	public function __construct(){
		$this->_init();
	}

	protected function _init(){
		$this->_initView();
	}

	protected function _initView(){
		$this->_view = new View();
	}

	protected function _getParam($key, $default=null){
		if(isset($_GET[$key])){
			return $_GET[$key];
		} else if(isset($_POST[$key])){
			return $_POST[$key];
		}
		return $default;
	}

	protected function _getParans(){
		$result = array();
		if(isset($_GET)){
			$result += $_GET;
		}

		if(isset($_POST)){
			$result += $_POST;
		}
	}

	protected function _redirect($url){
		if(headers_sent()){
			throw new Exception("Se han enviado cabeceras HTTP");
		}

		header("Location:$url");
		exit;
	}

	abstract public function indexAction();

}