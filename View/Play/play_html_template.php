<?php
	if(isset($_REQUEST['url']) && isset($_REQUEST['title'])) {
		$url = $_REQUEST['url'];
		$title = $_REQUEST['title'];
?>
<html>
	<head>
		<title><?= $title ?></title>
		<link rel="stylesheet" type="text/css" href="Style/play_style.css">
	</head>
	<body>
		<div class="BackB">						
			<a href="./transaction.php"><input class="Button2" type="button" value="Back" /></a>
		</div>
		
		<iframe width="420" height="315" src="<?= $url ?>?autoplay=1" allowfullscreen>
		</iframe>
	</body>
</html>
<?php
	}
?>