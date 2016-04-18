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
			<link rel="stylesheet" type="text/css" href="Style/help_style.css">
		</head>
		<body>
			<nav id="menu" class="panel" role="navigation">
        		<?php include("side_bar_template.php"); ?>
    		</nav>
    		
			<div id="Main" class="wrap push">
				<div id="Id_Button">
					<a href="#menu" class="menu-link">&#9776;</a>
				</div>
				
				
				
				 <div class="Text_H">
    				<div class="Head">Help</div>
    				<div class="Title">How to use the MRS:</div>
    					<div class="Text_"> - Register/LogIn<br>
    										- Go to <b>HOME</b> page<br>
    										- Click on the Title of the movie that you want to watch<br>
											- Click on <i><b>RENT</b></i> button on the bottom of screen<br>	    				
    										- Go to <b>TRANSACTION</b> page and click on <i><b>PLAY</b></i> button on the right of the table.<br>
    										<br><font color="#538cc6" size="5px"><i><b>Enjoy.</b></i></font>
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