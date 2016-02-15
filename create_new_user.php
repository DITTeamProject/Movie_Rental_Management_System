<?php
	include('Controller/Controller.php');
	include('Model/Model.php');
	
	$controller = new Controller(new Model());
	
	$controller->user_sign_up();
?>