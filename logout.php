<?php
	include('Controller/Controller.php');
	include('Model/Model.php');
	
	$controller = new Controller(new Model());
	
	$controller->log_out();
	
	header('Location: index.php');
?>