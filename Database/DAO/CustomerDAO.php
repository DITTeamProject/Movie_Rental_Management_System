<?php
	include_once('Class/Customer.php');
	include_once('Database/DBManager.php');
	
	class CustomerDAO {
		private $db_manager = null;
		private $customer = null;
		
		public function __construct() {
			$this->db_manager = new DBManager();
			
		}
		
		public function getCustomerByUserName($username) {
			$this->db_manager->openConnection();
			
			$sql = "select * from Customer where User_Name = '$username'";
						
			$result = $this->db_manager->query($sql);
			
			if($result->fetchInto($row)) {
				$this->customer = new Customer($row[0], $row[1], $row[2], $row[3]);
			}
			
			$this->db_manager->closeConnection();
			
			return $this->customer;
		}
		
		public function insertCustomer($username, $password, $email) {
			$this->db_manager->openConnection();
			
			$sql = "insert into Customer (User_Name, Password, Email) values ('$username', '$password', '$email')";
			
			echo $sql;
			
			$result = $this->db_manager->query($sql);
			
			if(DB::isError()) {
				die($result->getMessage());
			}
			
			$this->db_manager->closeConnection();
			
			return $this->getCustomerByUserName($username);
		}
	}
	
?>