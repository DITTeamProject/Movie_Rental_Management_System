<?php
	/* if User login */
	session_start();
	if(isset($_SESSION['customer'])) {
		$transactions = null;
		$user = $_SESSION['customer'];
		$transactions = $this->model->getTransactionsByUserID($user->getID());
?>
	<html>
		<head>
			<title>Customer Help</title>
			<link rel="stylesheet" type="text/css" href="Style/account_style.css">
		</head>
		<body>
			<nav id="menu" class="panel" role="navigation">
        		<?php include("side_bar_template.php"); ?>
    		</nav>
    		
			<div id="Main" class="wrap push">
				<div id="Id_Button">
					<a href="#menu" class="menu-link">&#9776;</a>
				</div>
				
				<div class="Text_Acc">
    				<div class="Head">MyAccount</div>
    				<div class="Title">Account Details :</div>
    					<div class="Text_"> <h3><?= $_SESSION['customer']->getUsername()?></h3>
												<?= $_SESSION['customer']->getEmail() ?>
												
    					</div>
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
<?php
	} else {
		header('Location: ./login.php');
	}
?>