<?php
	//if user login
	session_start();
	if(isset($_SESSION['customer'])) {
?>
		<html>
			<head>
				<title>Comment</title>
				<link rel="stylesheet" type="text/css" href="Style/comment_style.css">
			</head>
			<body>
				<div id="Background">
					<div id="Main">
						<div id="Movie_Info">
					
							<div id="Movie_Cover">
								<img src="Cover/<?= $movie->getCover() ?>" alt="<?= $movie->getTitle() ?>" />
							</div>
						
							<div id="Movie_Overview">
								<table id="Movie_Table">
									<tr>
										<td>Title: </td>
										<td><?= $movie->getTitle() ?></td>
									</tr>
									<tr>
										<td>Genre: </td>
										<td><?= $movie->getGenre() ?></td>
									</tr>
									<tr>
										<td>Price: </td>
										<td>€<?= $movie->getPrice() ?></td>
									</tr>
									<tr>
										<td>Duration: </td>
										<td><?= $movie->getDuration() ?></td>
									</tr>
								</table>
							</div>
						
						</div>
						
						<div id="Rent">
							<form method="POST" action="">
								<input id="Rent_Button" type="submit" value="Rent" />
								<input type="hidden" name="action" value="rent" />
								<input type="hidden" name="cost" value="<?= $movie->getPrice() ?>" />
								<input type="hidden" name="movie_id" value="<?= $movie->getId() ?>" />
								<input type="hidden" name="movie_title" value="<?= $movie->getTitle() ?>" />
								<input type="hidden" name="customer_id" value="<?= $_SESSION['customer']->getId() ?>" />
								<input type="hidden" name="customer_email" value="<?= $_SESSION['customer']->getEmail() ?>" />								
							</form>
						</div>
					
						<div id="Comment">
							<?php 
								$comments = $this->model->getAllCommentsByMovieID($movie->getID());
						
								if(count($comments) > 0) {
									foreach($comments as $comment) {
										$customer = $this->model->getCustomerByID($comment->getCustomerID());
							?>
					
								<div class="Comment">
									<div class="Customer_Name">
										<h1><?= $customer->getUsername() ?>: </h1>
									</div>
							
									<div class="Comment_Content">
								 		<?= $comment->getContent() ?>
									</div>
								
								</div>
						
							<?php 
									}
								} 
							?>
						</div>
			
						<div>
							<div>
								<textarea id="Text_Area" name="content" form="Comment_Form">
								</textarea>
							</div>
							
							<div>
								<select form="Comment_Form" name="star">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							
							<div>
								<form id="Comment_Form" method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
									<input type="submit" value="Comment" />
									<input type="hidden" name="action" value="comment" />
									<input type="hidden" name="movie_id" value="<?= $movie->getId() ?>" />
									<input type="hidden" name="customer_id" value="<?= $_SESSION['customer']->getId() ?>" />
								</form>
							</div>
							
						</div>
							
					</div>
				</div>
			</body>
		</html>
<?php
	//if user didn't login
	} else {
		header('Location: ./login.php');								/* redirect to login page */
	}
?>