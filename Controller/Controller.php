<?php
	/*Controller is one of the component in MVC model, it will be user to process the form and request. link between web page and database.*/
	class Controller {
		/*Model object in MVC mudel.*/
		private $model;
		
		/*Construct function.*/
		public function __construct($model) {
			$this->model = $model;
		}
		
		/*This function is used to check the information the user post and sent those to model*/
		public function check_user_login() {
			
			/*Here need more check for the information user post.*/
			
			if(isset($_POST['Login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$this->model->check_user_login($username, $password);
			}
		}
		
		/*this function is used to process the user input and sent that to model to sign up a new user.*/
		public function user_sign_up() {
			
			/*Here need more check for user input.*/
			
			if(isset($_POST['Signup'])) {
				if(!empty($_POST['username']) and !empty($password = $_POST['passwd']) and !empty($email = $_POST['email'])) {
					$username = $_POST['username'];
					$password = $_POST['passwd'];
					$repeat = $_POST['repeat'];
					$email = $_POST['email'];
			
					if($password == $repeat) {
						if($this->model->insert_new_user_into_database($username, $password, $email)) {
							$this->log_out();
							session_start();
							$_SESSION['user'] = new User(0, $username, $password, $email);
							header('Location: index.php');
						} else {
							header('Location: user_signup_page.php');
						}
					}
				}
			}
		}
		
		/*This function is used to logout.*/
		public function log_out() {
			/*via clear and destory the session.*/
			session_start();
			session_unset();
			session_destroy();
		}
	}
?>