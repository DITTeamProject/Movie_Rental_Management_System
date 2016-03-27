<?php
	include_once('Class/Comment.php');
	include_once('Database/DBManager.php');
	
	class CommentDAO {
		private $db_manager = null;
		private $comments = array();
		
		public function __construct() {
			$this->db_manager = new DBManager();
		}
		
		public function getAllCommentsByMovieID($id) {
			$this->db_manager->openConnection();
			
			$sql = "select * from Comment where Movie_ID = $id";
			
			$result = $this->db_manager->query($sql);
			
			if(DB::isError($result)) {
				die($result->getMessage());
			}
			
			while($result->fetchInto($row)) {
				/**
				 * row[0]; Comment ID
				 * 
				 * row[1]: Movie ID
				 * 
				 * row[2]: Customer ID
				 * 
				 * row[3]: Star
				 * 
				 * row[4]: Content
				 */
				$this->comments[] = new Comment($row[0], $row[1], $row[2], $row[3], $row[4]);
			}
			
			$this->db_manager->closeConnection();
			
			return $this->comments;
		}
		
		public function insertNewComment($movie_id, $customer_id, $star, $content) {
			$this->db_manager->openConnection();
			
			$sql = "insert Comment (Movie_ID, Customer_ID, Star, Content) values ($movie_id, $customer_id, $star, $content)";
			
			$result = $this->query($sql);
			
			if(DB::isError($result)) {
				die($result->getMessage());
			}
			
			$this->db_manager->closeConnection();
			
		}
		
	}
?>