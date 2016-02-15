<?php
	require_once('DB.php');
	
	/*$user_name = 'james';
	$passwd = 'xyf654321';
	$hostspec = 'localhost';
	$database = 'movie_rental';
	$phptype = 'mysqli';
	
	$dsn = "$phptype://$user_name:$passwd@$hostspec/$database";*/
	
	$dsn = 'mysqli://james:xyf654321@localhost/movie_rental';
		
	$db = DB::connect($dsn);
	
	if(DB::isError($db)) {
		die($db->getMessage());
	}
?>