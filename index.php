<?php
	include_once('Model/Model.php');
	include_once('Controller/Controller.php');
	include_once('View/View.php');
	include_once('Config/config.inc.php');
	include_once('Database/DAO/MovieDAO.php');
	
	$action = "";
	
	if(!empty($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	}
	
	$model = new Model();
	
	$controller = new Controller($model, $action);
	
	$view = new View($model, $controller); 
	
	$view->getHTMLOutputInIndex();
?>