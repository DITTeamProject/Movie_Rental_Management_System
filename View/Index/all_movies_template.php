<div class="Movies">

<?php
	foreach($movies as $movie) {
?>
		
			<div class="Movie">
				<img class="Preview" src="Cover/<?= $movie->getCover() ?>" alt="<?= $movie->getTitle() ?>" />
				<h3><?= $movie->getTitle() ?></h3>
			</div>
		
<?php
	}
?>

		</div>