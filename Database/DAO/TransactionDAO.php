<?php
	include_once('Class/Transaction.php');
	include_once('Database/DBManager.php');
	
	class TransactionDAO {
		private $db_manager = null;
		private $transactions = array();
		
		public function __construct() {
			$this->db_manager = new DBManager();
		}
		
		public function insertNewTransaction($movie_id, $user_id, $cost) {
			$this->db_manager->openConnection();
			
			$sql = "insert into Transaction (Movie_ID, Customer_ID, Return_Date, Cost) values ($movie_id, $user_id, date_add(now(), INTERVAL 1 MONTH), $cost)";
						
			$result1 = $this->db_manager->query($sql);
			
			if(DB::isError($result1)) {
				die($result->getMessage());
			}
			
			$query_sql = "select * from Transaction where Movie_ID = $movie_id and Customer_id = $user_id";
			
			//echo $query_sql;
			
			$result2 = $this->db_manager->query($query_sql);
			
			if($result2->fetchInto($row)) {
				/**
				 * row[0]; Transaction ID
				 *
				 * row[1]: Movie ID
				 *
				 * row[2]: Customer ID
				 *
				 * row[3]: Rental Date
				 *
				 * row[4]: Return Date
				 * 
				 * row[5]: Cost
				 */
				$transaction = new Transaction($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
			}
				
			$this->db_manager->closeConnection();
			
			return $transaction;
		}
		
		public function getTransactionsByUserID($user_id) {
			$this->db_manager->openConnection();
			
			$sql = "select * from Transaction where Customer_ID = $user_id ";
			
			$result = $this->db_manager->query($sql);
			
			if(DB::isError($result)) {
				die($result->getMessage());
			}
				
			while($result->fetchInto($row)) {
				/**
				 * row[0]; Transaction ID
				 *
				 * row[1]: Movie ID
				 *
				 * row[2]: Customer ID
				 *
				 * row[3]: Rental Date
				 *
				 * row[4]: Return Date
				 *
				 * row[5]: Cost
				 */
				$this->transactions[] = new Transaction($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
			}
			
			$this->db_manager->closeConnection();
			
			return $this->transactions;
		}
		
		function getTransaction() {
			return $this->transactions;
		}
	}
?>