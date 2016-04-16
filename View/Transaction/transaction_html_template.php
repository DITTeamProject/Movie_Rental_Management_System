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
			<title>Transaction</title>
			<link rel="stylesheet" type="text/css" href="Style/transaction_style.css">
		</head>
		<body>
			<nav id="menu" class="panel" role="navigation">
        		<?php include("side_bar_template.php"); ?>
    		</nav>
    		
			<div id="Main" class="wrap push">
				<div id="Id_Button">
					<a href="#menu" class="menu-link">&#9776;</a>
				</div>
				
				<div class="Transactions">
					<div class="Transaction_Table">
						<table>
							<tr bgcolor="#7ca8d3">
								<td>Transaction</td>
								<td>Movie</td>
								<td>Rental Date</td>
								<td>Reture Date</td>
								<td>Cost (&euro;)</td>
								<td></td>
							</tr>
							<?php
								if($transactions != null) {
									foreach($transactions as $transaction) {
										$movie = $this->model->getMoviesByMovieID($transaction->getMovieID());
							?>
									<tr>
										<td><?= $transaction->getTransactionID() ?></td>
										<td><?= $movie->getTitle() ?></td>
										<td><?= $transaction->getRentalDate() ?></td>
										<td><?= $transaction->getReturnDate() ?></td>
										<td><?= $transaction->getCost() ?></td>
										<td>
											<form method="POST" action="play.php">
												<input type="submit" value="Play"  />
												<input type="hidden" name="title" value="<?= $movie->getTitle() ?>" />
												<input type="hidden" name="url" value="<?= $movie->getURL() ?>" />
											</form>
										</td>
									</tr>
							<?php
									}
								}
							?>
							
						</table>
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