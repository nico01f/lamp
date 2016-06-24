<?php

error_reporting(E_ALL | E_STRICT);
require_once 'controllers/ProductoController.php';

$frontController = new ProductoController();
echo $frontController->indexAction();
