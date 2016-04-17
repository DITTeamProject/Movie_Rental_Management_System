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
				
				$movies = $this->model->getMoviesByTitle('%' . $_REQUEST['search']. '%');
								
				
			} else {
				
				$movies = $this->model->getAllMovies();														/*Otherwise, call getAllMovies().*/
				
			}
			
			include('View/Index/index_html_template.php');													/*include index html framework.*/
		}
		
		/**
		 * getHTMLOutputInLogin
		 * 
		 * Display the HTML code in login page.
		 * 
		 */
		public function getHTMLOutputInLogin() {
			include('View/Login/login_html_template.php');
		}
		
		/**
		 * getHTMLOutputInSignUp
		 * 
		 * Display the HTML code in sign up page
		 * 
		 */
		public function getHTMLOutputInSignUp() {
			include('View/Signup/signup_html_template.php');
		}
		
		/**
		 * getHTMLOutputInComment
		 * 
		 * Display the HTML code in comment page
		 * 
		 */
		public function getHTMLOutputInComment() {
			$movie = null;
			
			if(isset($_REQUEST['movie'])) {
				$movie = $this->model->getMoviesByTitle($_REQUEST['movie'])[0];
				include('View/Comment/comment_html_template.php');
			}
		}
		

		public function getHTMLOutputInAccount(){
			include("View/Account/account_html_template.php");
		}
		
		public function getHTMLOutputInTransaction() {			
			include('View/Transaction/transaction_html_template.php');
		}
		
		public function getHTMLOutputInPlay() {
			include("View/Play/play_html_template.php");
		}
		
		public function getHTMLOutputInHelp(){
			include("View/Help/help_html_template.php");
		}
		
		public function getHTMLOutputInAdministratorLogin() {
			include("View/AdministratorLogin/administrator_login_html_template.php");
		}
		
		public function getHTMLOutputInInserNewMovie() {
			include("View/InsertNewMovie/insert_new_movie_html_template.php");
		}
			
	}
?>