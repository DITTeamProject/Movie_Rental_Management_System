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
		
	}
?>