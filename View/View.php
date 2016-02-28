<?php
	class View {
		private $model;
		private $controller;
				
		public function __construct($model, $controller) {
			$this->model = $model;
			$this->controller = $controller;
			
		}
		
		public function getHTMLOutputInIndex() {
			if(isset($_REQUEST['search'])) {
				
				$movies = $this->model->getMoviesByTitle($_REQUEST['search']);
								
				
			} else {
				
				$movies = $this->model->getAllMovies();
				
			}
			
			include('View/Index/index_html_template.php');
		}
	}
?>