<!-- Index HTML code framework -->

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/index_style.css">
		<title>Movies</title>
	</head>
	<body>
		<div class="Menu">
			<?php include('slide_bar_template.php') /*Include Slide bar*/ ?>
		</div>
		<div>
			<?php include('search_bar_template.php') /*Include search bar*/ ?>
		
			<?php include('all_movies_template.php') /*Include all movies div*/ ?>
		</div>
		
	</body>
</html>