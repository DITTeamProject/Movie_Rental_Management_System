<?php
	class Controller {
		private $model;
		
		public function __construct($model, $action) {
			$this->model = $model;
			
			switch($action) {
				case 'login':
					$this->customerLogin();
					break;
				case 'logout':
					$this->customerLogout();
					break;
				case 'signup':
					$this->CustomerSignUp();
					break;
				case 'comment':
					$this->CustomerComment();
				default:
					break;
			}
		}
		
		public function customerLogin() {
			$username = $_POST['username'];
			
			$password = $_POST['password'];
			
			$customer = $this->model->getCustomerByUserName($username);
			
			if($customer != NULL) {
				//login successful
				if($customer->getPassword() == $password) {
					session_start();
					$_SESSION['customer'] = $customer;
					header('Location: ./index.php');
				//login fault
				} else {
					echo "Fault";
				}
			}
			
		}
		
		public function customerLogout() {
			session_start();
			session_unset('customer');
			session_destroy();
		}
		
		public function CustomerSignUp() {
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			
			/**
			 * 
			 * More check for input data
			 * 
			 * 
			 */
			
			$customer = $this->model->insertCustomer($username, $password, $email);
			
			session_start();
			$_SESSION['customer'] = $customer;
			header('Location: ./index.php');
		}
		
		public function CustomerComment() {
			$star = $_REQUEST['star'];
			$content = $_REQUEST['content'];
			$movie_id = $_REQUEST['movie_id'];
			$customer_id = $_REQUEST['customer_id'];
			
			$this->model->insertNewComment($movie_id, $customer_id, $star, $content);
		}
		
	}
?>