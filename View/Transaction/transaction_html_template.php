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
		</head>
		<body>
			<table>
				<tr>
					<td>Transaction</td>
					<td>Movie</td>
					<td>Rental Date</td>
					<td>Reture Date</td>
					<td>Cost</td>
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
							<td>€<?= $transaction->getCost() ?></td>
						</tr>
				<?php
						}
					}
				?>
			</table>
		</body>
	</html>
<?php
	} else {
		header('Location: ./login.php');
	}
?>