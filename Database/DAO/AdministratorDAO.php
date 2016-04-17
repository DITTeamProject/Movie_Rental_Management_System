<?php
	include_once('Class/Administrator.php');
	include_once('Database/DBManager.php');
	
	class AdministratorDAO {
		private $db_manager = null;
		private $administrator = null;
		
		public function __construct() {
			$this->db_manager = new DBManager();
		}
		
		public function getAdministratorByUserName($username) {
			$this->db_manager->openConnection();									//open database connection
				
			$sql = "select * from Administrator where User_Name = '$username'";		//construct sql statement
		
			$result = $this->db_manager->query($sql);								//execuate query sql statement
				
			if(DB::isError($result)) {
				die($result->getMessage());											//check error
			}
		
			if($result->numRows() == 0) {
				return NULL;
			}
			
			/**
			 * 
			 * row[0]: Administrator ID
			 * 
			 * row[1]: Administrator Username
			 * 
			 * row[2]: Administractor Password
			 * 
			 */
			if($result->fetchInto($row)) {
				$this->administrator = new Administrator($row[0], $row[1], $row[2]);	//fetch single use or null if not found
			}
				
			$this->db_manager->closeConnection();									//close database connection
				
			return $this->administrator;													//return user if found or null if not found
		}
	}
?>