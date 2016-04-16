<?php
	require_once('DB.php');
	
	/**
	 * DBManager
	 * 
	 * DBManager is used to execute specific operations to database, including open, query and close.
	 *
	 *
	 */
	class DBManager {
		private $user_name;
		private $password;
		private $host_name;
		private $db_name;
		private $db_type;
		private $dsn;
		private $db;
		
		/**
		 * 
		 * 
		 * 
		 */
		public function __construct() {
			$this->user_name = DB_USER;
			$this->password = DB_PASS;
			$this->host_name = DB_HOST;
			$this->db_type = DB_TYPE;
			$this->db_name = DB_NAME;
			
			$this->dsn = "$this->db_type://$this->user_name:$this->password@$this->host_name/$this->db_name";
																							/*Construct database address.*/
		}
		
		/**
		 * openConnection
		 * 
		 * Create connection to database
		 * 
		 * @return DB $this->db DB connection object with connection to database or DB_Error object
		 */
		public function openConnection() {
			$this->db = DB::connect($this->dsn);											/*connect to database.*/
			
			if(DB::isError($this->db)) {													/*Check Error.*/
				die($this->db->getMessage());
			}
			
			return $this->db;																/*Return DB object or DB_Error object.*/
		}
		
		/**
		 * query
		 * 
		 * Execute query in database and get the rusult
		 * 
		 * @param string $sql SQL query statement that user provided.
		 * @return mixed $result DB_Result object including result of query
		 */	
		public function query($sql) {
			$result = $this->db->query($sql);												/*Execute SQL statement in database.*/
			
			if(DB::isError($result)) {														/*Chech Error.*/
				die($result->getMessage());
			}
			
			return $result;																	/*Return DB_Result Object.*/
		}
		
		/**
		 * closeConnection
		 * 
		 * Close Database Connection
		 * 
		 */
		public function closeConnection() {
			$this->db->disconnect();														/*Disconnect to database.*/
		}
			
	}
?>