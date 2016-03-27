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
									<td><?= $movie->getPrice() ?></td>
								</tr>
								<tr>
									<td>Duration: </td>
									<td><?= $movie->getDuration() ?></td>
								</tr>
							</table>
						</div>
						
					</div>
					
					<div id="Comment">
						<?php 
							$comments = $this->model->getAllCommentsByMovieID($movie->getID());
						
							if(count($comments) > 0) {
								foreach($comments as $comment) {
						?>
					
							<div>
								<div>
									<h1>Comment</h1>
								</div>
							
								<div>
								 	<?= $comment->getContent() ?>
								</div>
								
							</div>
						
						<?php 
								}
							} 
						?>
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