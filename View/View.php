<?php
	class View {
		private $model;
		private $controller;
				
		public function __construct($model, $controller) {
			$this->model = $model;
			$this->controller = $controller;
			
		}
		
		/**
		 * getHTMLOutputInIndex
		 * 
		 * Display the HTML code in index page.
		 * 
		 */
		public function getHTMLOutputInIndex() {
			if(isset($_REQUEST['search'])) {																/*if user execute search operation, call getMoivesByTitle()*/
				
				$movies = $this->model->getMoviesByTitle($_REQUEST['search']);
								
				
			} else {
				
				$movies = $this->model->getAllMovies();														/*Otherwise, call getAllMovies().*/
				
			}
			
			include('View/Index/index_html_template.php');													/*include index html framework.*/
		}
		
		/**
		 * getHTMLOutputInLogin
		 * 
		 * Display the HTML code in login page.
		 */
		public function getHTMLOutputInLogin() {
			include('View/Login/login_html_template.php');
		}
		
		public function getHTMLOutputInSignUp() {
			include('View/Signup/signup_html_template.php');
		}
	}
?>