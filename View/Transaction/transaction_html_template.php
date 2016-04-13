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
			<div id="Main">
				<div id="SideBar">
					<?php include("View/side_bar_template.php"); ?>
				</div>
				
				<div class="Transactions">
					<div class="Transaction_Table">
						<table>
							<tr bgcolor="#7ca8d3">
								<td>Transaction</td>
								<td>Movie</td>
								<td>Rental Date</td>
								<td>Reture Date</td>
								<td>Cost (€)</td>
							</tr>
							<?php
								if($transactions != null) {
									foreach($transactions as $transaction) {
							?>
									<tr>
										<td><?= $transaction->getTransactionID() ?></td>
										<td><?= $transaction->getMovieID() ?></td>
										<td><?= $transaction->getRentalDate() ?></td>
										<td><?= $transaction->getReturnDate() ?></td>
										<td><?= $transaction->getCost() ?></td>
									</tr>
							<?php
									}
								}
							?>
							
						</table>
						</div>
					</div>	
			</div>
			
		</body>
	</html>
<?php
	} else {
		header('Location: ./login.php');
	}
?>