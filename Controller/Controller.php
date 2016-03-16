<?php
	class Controller {
		private $model;
		
		public function __construct($model, $action) {
			$this->model = $model;
			
			switch($action) {
				case 'login':
					$this->customerLogin();
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
				if($customer->getPassword() == $password) {
					$_SESSION['customer'] = $customer;
				}
			}
			
		}
		
	}
?>