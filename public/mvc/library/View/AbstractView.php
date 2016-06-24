<?php

abstract class AbstractView{
	protected $_params=array();

	public function __get($key){
		return $this->getAttribute($key);
	}

	public function setAttribute($key,$value){
		if ($this->hasAttribute($key)){
			throw new Exception ("El atributo de vista $key existe");
		}
		$this->_params[$key]=$value;
	}

	public function getAttribute($key){
		if($this->hasAttribute($key)){
			return $this->_parans[$key];
		}
		return null;
	}

	public function hasAttribute($key){
		if(isset($this->_parans[$key])){
			return true;
		}
		return false;
	}

	abstract public function render($viewName);

}
