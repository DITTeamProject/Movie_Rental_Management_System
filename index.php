<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include("Model/Model.php");
			include("Controller/Controller.php");
			include("View/View.php");
	
			$model = new Model();
			$controller = new controller($model);
			$view = new View($controller, $model);
		?>
		
		<?php
			$view->greet_to_user_in_index_page();
		?>
		<?php
			$view->show_movies_list();
		?>
</html>
