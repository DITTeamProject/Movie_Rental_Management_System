<!-- Index HTML code framework -->

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/index_style.css">
		<title>Movies</title>
	</head>
	<body>
		<div id="Main">
			<div id="SideBar">
				<?php include("View/Index/side_bar_template.php"); ?>
			</div>
			<div id="Content">
				<div id="Search_Bar">
					<?php include("View/Index/search_bar_template.php"); ?>
				</div>
				<div id="Movies">
					<?php include("View/Index/all_movies_template.php"); ?>
				</div>
			</div>
		</div>
	</body>
</html>