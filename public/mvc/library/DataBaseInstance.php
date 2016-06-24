<?php
require_once '../../library/DataBase/IDataBase.php';

class DataBaseInstance implements IDataBase {

	private $_user="root";
	private $_password="clave";
	private $_dsn="mysql:dbname=productos;host=localhost";
	private $_conn=null;
	static private $_selfInstance=null;

	static public function getInstance(){
		if(!(self::$_selfInstance instanceof IDataBase)){
			self::$_selfInstance = new self();
		}
		return self::$_selfInstance;
	}

	private function __construct(){
		try{
			$this->_conn = new PDO($this->_dsn,$this->_user,$this->_password);
			$this->_conn->setAttribute(PDO::ATTR.ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo "Problema de conexion" . $e->getMessage();
			throw $e;
		}
	}

	public function getConnection(){
		if($this->_conn===null){
			self::$_selfInstance=null;
			self::getInstance();
		}
		return $this->_conn;
	}

	public function closeConnection(){
		$this->_conn=null;
	}

	public function isConnected(){
		return ($this->_conn instanceof PDO);
	}

	public function __destruct(){
		return $this->closeConnection();
	}


}
