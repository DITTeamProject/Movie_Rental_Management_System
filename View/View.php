<?php
	/*View is one of the component in MVC model, and it is used to organised or manager the content in webpage.*/
	class View {
		private $model;
		private $controller;
		
		/*Construct function.*/
		public function __construct($controller, $model) {
			$this->controller = $controller;
			$this->model = $model;
		}
		
		/*Show the movies from 'Movie' in database*/
		public function show_movies_list() {
			/*call model and read all movies information from database into model.*/
			$this->model->fetch_movies_from_database();
			
			/*iterate all records and generate the div content for each movie.*/
			foreach($this->model->get_movies() as $movie) {
			?>
				<div>
					<h1><?= $movie->get_title() ?></h1>
					<img src="./Covers/<?= $movie->get_cover() ?>" />
				</div>
			<?php
			}
		}
		
		/*if user not login, give login and signup links to user. if user login, greet to user and give logout link.*/
		public function greet_to_user_in_index_page() {
			if($this->model->is_user_login()) {
			?>
					
				Hello, <?= $_SESSION['user']->get_username() ?>
				<a href="logout.php">Log out</a>
						
			<?php
				} else {
			?>
					
			<a href="user_login_page.php">Log In</a>
			<a href="user_signup_page.php">Sign Up</a>
			
		<?php
			}
		}
	}
?>