<!-- Show all the mvoies (Cover and Title) in a Movies class div -->

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