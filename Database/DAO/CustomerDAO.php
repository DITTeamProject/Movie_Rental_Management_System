<?php
	include_once('Class/Customer.php');
	include_once('Database/DBManager.php');
	
	class CustomerDAO {
		private $db_manager = null;
		private $customer = null;
		
		public function __construct() {
			$this->db_manager = new DBManager();
			
		}
		
		/**
		 * 
		 * getCustomerByUserName()
		 * 
		 * get the Customer with the user name provided
		 * 
		 * @param string $username
		 */
		public function getCustomerByUserName($username) {
			$this->db_manager->openConnection();									//open database connection
			
			$sql = "select * from Customer where User_Name = '$username'";			//construct sql statement
						
			$result = $this->db_manager->query($sql);								//execuate query sql statement
			
			if(DB::isError()) {
				die($result->getMessage());											//check error
			}
			
			if($result->fetchInto($row)) {
				$this->customer = new Customer($row[0], $row[1], $row[2], $row[3]);	//fetch single use or null if not found
			}
			
			$this->db_manager->closeConnection();									//close database connection
			
			return $this->customer;													//return user if found or null if not found
		}
		
		/**
		 * 
		 * insertCustomer
		 * 
		 * insert a new customer into table with basic information
		 * 
		 * 
		 * @param string $username
		 * @param string $password
		 * @param sring $email
		 */
		public function insertCustomer($username, $password, $email) {				
			$this->db_manager->openConnection();									//open connection
			
			$sql = "insert into Customer (User_Name, Password, Email) values ('$username', '$password', '$email')";
																					//construct insert sql statement
			//echo $sql;
			
			$result = $this->db_manager->query($sql);								//execute the sql statement and return boolean result (true or false)
			
			if(DB::isError($result)) {
				die($result->getMessage());											//check the result
			}
			
			$this->db_manager->closeConnection();									//close the database connection
			
			return $this->getCustomerByUserName($username);							//return the user who you try to insert in database
		}
		
		/**
		 * 
		 * 
		 * getCustomerByID
		 * 
		 * 
		 * get customer from database with provided id
		 * 
		 * 
		 * 
		 * @param int $id
		 */
		public function getCustomerByID($id) {
			$this->db_manager->openConnection();							//open database connection
			
			$sql = "select * from Customer where User_ID = $id";			//construct sql statement
			
			$result = $this->db_manager->query($sql);						//execute sql statement
			
			if(DB::isError($result)) {										//check execute result
				die($result->getMessage());
			}
			
			if($result->fetchInto($row)) {									//return single customer object or null if not found
				$this->customer = new Customer($row[0], $row[1], $row[2], $row[3]);
			}
							
			$this->db_manager->closeConnection();							//close the database connection
			
			return $this->customer;											//return customer if found or null if not found
		}
	}
	
?>