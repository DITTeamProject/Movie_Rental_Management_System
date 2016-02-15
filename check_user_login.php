<?php
	include('Controller/Controller.php');
	include('Model/Model.php');
	
	$controller = new Controller(new Model());
	
	$controller->check_user_login();
?>