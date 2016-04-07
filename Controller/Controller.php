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
					break;
				case 'rent':
					$this->CustomerRent();
					break;
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
		
		public function CustomerRent() {
			//print_r($_REQUEST);
			$movie_id = $_REQUEST['movie_id'];
			$customer_id = $_REQUEST['customer_id'];
			$cost = $_REQUEST['cost'];
			
			$transaction = $this->model->insertNewTransaction($movie_id, $customer_id, $cost);
			
			/* sent the mail to user block start */
			
			/*$to = $_REQUEST['customer_email'];
			$subject = "Bill From Movie Rental System";
			$message = "Hello";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						
			$res = mail($to, $subject, $message);
			
			if($res) {
				echo "Successful";
			} else {
				echo "Fail";
			}*/
						
			/* sent the mail to user block end */
			
		}
		
	}
?>