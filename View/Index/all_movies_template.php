<!-- Show all the mvoies (Cover and Title) in a Movies class div -->

<?php
	foreach($movies as $movie) {
?>
		
		<div class="Movie">
			<div class="Movie_Overview">
				<img class="Preview" src="Cover/<?= $movie->getCover() ?>" alt="<?= $movie->getTitle() ?>" />
				<h3><a class="Movie_Title" href="./comment.php?movie=<?= $movie->getTitle() ?>" ><?= $movie->getTitle() ?> </a></h3>
			</div>
					
			<div class="Popup">
				<div class="Info_Cover">
					<img src="Cover/<?= $movie->getCover() ?>" alt="<?= $movie->getTitle() ?>" />
				</div>
				<div class="Info_Message">
					<table>
						<tr>
							<td><b><font size="5px"><?= $movie->getTitle() ?></b></font></td>
						</tr>
						<tr>
							<td><?= $movie->getGenre() ?></td>
						</tr>
						<tr>
							<td>€ <?= $movie->getPrice() ?></td>
						</tr>
						<tr>
							<td><?= $movie->getDuration() ?></td>
						</tr>
					</table>
				</div>
			</div>	
		</div>	
<?php
	}
?>