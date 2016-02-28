<?php
	include('DB.php');
	
	class DBManager {
		private $user_name;
		private $password;
		private $host_name;
		private $db_name;
		private $db_type;
		private $dsn;
		private $db;
		
		public function __construct() {
			$this->user_name = DB_USER;
			$this->password = DB_PASS;
			$this->host_name = DB_HOST;
			$this->db_type = DB_TYPE;
			$this->db_name = DB_NAME;
			
			$this->dsn = "$this->db_type://$this->user_name:$this->password@$this->host_name/$this->db_name";
			
		}
		
		public function openConnection() {
			$this->db = DB::connect($this->dsn);
			
			if(DB::isError($this->db)) {
				die($this->db->getMessage());
			}
			
			return $this->db;
		}
		
		public function query($sql) {
			$result = $this->db->query($sql);
			
			if(DB::isError($result)) {
				die($result->getMessage());
			}
			
			return $result;
		}
		
		public function closeConnection() {
			$this->db->disconnect();
		}
			
	}
?>