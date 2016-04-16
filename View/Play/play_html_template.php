<?php
	if(isset($_REQUEST['url']) && isset($_REQUEST['title'])) {
		$url = $_REQUEST['url'];
		$title = $_REQUEST['title'];
?>
<html>
	<head>
		<title><?= $title ?></title>
	</head>
	<body>
		<iframe width="420" height="315" src="<?= $url ?>?autoplay=1" allowfullscreen>
		</iframe>
	</body>
</html>
<?php
	}
?>