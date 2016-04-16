<?php
	class Controller {
		private $model;
		
		/**
		 * 
		 * __construction
		 * 
		 * judge the user's action and do the action
		 * 
		 * 
		 * @param Model $model
		 * @param string $action
		 */
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
		
		/**
		 * 
		 * customerLogin()
		 * 
		 * Customer log in operation
		 * 
		 * 
		 */
		public function customerLogin() {
			$username = $_POST['username'];											/* get username that user input */
			
			$password = $_POST['password'];											/* get password that user input */				
			
			$customer = $this->model->getCustomerByUserName($username);				/* get the object according the username from database */
			
			if($customer != NULL) {													/* if user exist in database */								
				//login successful
				if($customer->getPassword() == $password) {							
					session_start();
					$_SESSION['customer'] = $customer;
					header('Location: ./index.php');
				//login fault
				} else {															/* password is wrong */
					header('Location: ./login.php?error=2');
				}
			} else {
				header('Location: ./login.php?error=1');							/* if user exist in database */
			}
			
		}
		
		public function customerLogout() {
			session_start();
			session_unset('customer');
			session_destroy();
		}
		
		/**
		 * 
		 * Customer fill in the form to sign up
		 * 
		 * 
		 */
		public function CustomerSignUp() {
			/* get user input */
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			
			/**
			 * 
			 * More check for input data here
			 * 
			 * 
			 */
			
			$customer = $this->model->insertCustomer($username, $password, $email);
			
			session_start();
			$_SESSION['customer'] = $customer;												/* record customer object to seesion */
			header('Location: ./index.php');												/* jump to home page */
		}
		
		
		/**
		 * 
		 * CustomerComment()
		 * 
		 * 
		 * Customer insert comment into sepecific movie
		 * 
		 * 
		 */
		public function CustomerComment() {
			$star = $_REQUEST['star'];
			$content = $_REQUEST['content'];
			$movie_id = $_REQUEST['movie_id'];
			$customer_id = $_REQUEST['customer_id'];
			
			$this->model->insertNewComment($movie_id, $customer_id, $star, $content);
		}
		
		
		/**
		 * 
		 * CustomerRent
		 * 
		 * 
		 * 
		 * Customer rent sepecific movie
		 * 
		 * 
		 * 
		 */
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
			
			echo "<script type='text/javascript'>alert('rent successfully!')</script>";			/* Remind user that rent sucessfully */
			
		}
		
	}
?>