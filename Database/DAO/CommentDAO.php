<?php
	include_once('Class/Comment.php');
	include_once('Database/DBManager.php');
	
	class CommentDAO {
		private $db_manager = null;
		private $comments = array();
		
		public function __construct() {
			$this->db_manager = new DBManager();
		}
		
		/**
		 * 
		 * getAllCommentByMovie
		 * 
		 * fetch all commment of the movie matching the id you provided
		 * 
		 * @param int $id
		 */
		public function getAllCommentsByMovieID($id) {
			$this->db_manager->openConnection();					//open database connection
			
			$sql = "select * from Comment where Movie_ID = $id";	//construct sql statement
			
			$result = $this->db_manager->query($sql);				//execute sql statement
			
			if(DB::isError($result)) {								//check the result
				die($result->getMessage());
			}
			
			while($result->fetchInto($row)) {						//fetch the result
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
				 */													//add new comment to array
				$this->comments[] = new Comment($row[0], $row[1], $row[2], $row[3], $row[4]);
			}
			
			$this->db_manager->closeConnection();					//close database connection
			
			return $this->comments;									//return comments array
		}
		
		/**
		 * insertNewComment
		 * 
		 * insert a new comment into database
		 * 
		 * 
		 * @param int $movie_id
		 * @param int $customer_id
		 * @param int $star
		 * @param string $content
		 */
		public function insertNewComment($movie_id, $customer_id, $star, $content) {
			$this->db_manager->openConnection();										//open database connection	
			
			$sql = "insert Comment (Movie_ID, Customer_ID, Star, Content) values ($movie_id, $customer_id, $star, '$content')";
																						//construct sql statement
			$result = $this->db_manager->query($sql);									//execute sql statement
			
			if(DB::isError($result)) {													//check result
				die($result->getMessage());
			}
			
			$this->db_manager->closeConnection();										//close database connection
			
		}
		
	}
?>