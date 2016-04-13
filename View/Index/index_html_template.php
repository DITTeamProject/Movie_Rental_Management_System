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
				<table>
					<tr>
						<td>
							<h1>&nbsp &nbsp<font color="#538cc6">M</font>ovie <font color="#538cc6">R</font>ental<font color="#538cc6"> S</font>ystem</h1>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<div id="Search_Bar">
							<?php include("View/Index/search_bar_template.php"); ?>
							</div>
						</td>
					</tr>
				</table>
				<div id="Movies">
					<?php include("View/Index/all_movies_template.php"); ?>
				</div>
			</div>
		</div>
	</body>
</html>