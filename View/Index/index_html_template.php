<!-- Index HTML code framework -->

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/index_style.css">
		<title>Movies</title>
	</head>
	<body>
		<nav id="menu" class="panel" role="navigation">
        	<?php include("View/Index/side_bar_template.php"); ?>
    	</nav>
		<div id="Main" class="wrap push">
			<div id="Id_Button">
				<a href="#menu" class="menu-link">&#9776;</a>
			</div>
			
			<div id="Content">
				<div id="Application_Title">
					<h1>&nbsp; &nbsp;<font color="#538cc6">M</font>ovie <font color="#538cc6">R</font>ental<font color="#538cc6"> S</font>ystem</h1>
				</div>		
		
				<div id="Search_Bar">
					<?php include("View/Index/search_bar_template.php"); ?>
				</div>
				
				<div id="Movies">
					<?php include("View/Index/all_movies_template.php"); ?>
				</div>
			</div>
			<div>
				<a href="administrator_login.php">Administractor?</a>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    	<script src="./bigSlide.js"></script>
    	<script>
        	$(document).ready(function() {
            	$('.menu-link').bigSlide();
        	});
    	</script>
	</body>
</html>