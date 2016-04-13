<?php
	include_once('Class/Movie.php');
	include_once('Database/DBManager.php');
	
	/**
	 * MovieDAO
	 * 
	 *
	 */
	class MovieDAO {
		private $db_manager = null;
		private $movies = null;
		
		/**
		 * __construct
		 * 
		 */
		public function __construct() {
			$this->db_manager = new DBManager();
			$this->movies = array();
		}
		
		/**
		 * getAllMovies
		 * 
		 * Fetch all movie records from Movie table in database.
		 * 
		 * @return array $this->movies array of movie object with all movie records.
		 */
		public function getAllMovies() {
			unset($this->movies);																		/*Clear movies array.*/
			
			$this->db_manager->openConnection();														/*Connect database.*/
			
			$sql = 'select * from Movie';
			
			$result = $this->db_manager->query($sql);													/*Query.*/
			
			while($result->fetchInto($row)) {															/*fetch movie into movies array.*/
				/**
				  * row[0]: Movie ID
				  * 
				  * row[1]: Movie Title
				  * 
				  * row[2]: Movie Genre
				  * 
				  * row[3]: Movie Price
				  * 
				  * row[4]: Movie Cover Path
				  * 
				  * row[5]: Movie Duration
				  */
				$this->movies[] = new Movie($row[0], $row[1], $row[2], sprintf("%.2f", $row[3]), $row[4], $row[5]);
			}
			
			$this->db_manager->closeConnection();														/*Close connection to database.*/
			
			return $this->movies;																		/*Return.*/
		}
		
		/**
		 * getMoviesByTitle
		 * 
		 * Search the movies matching the title in database.
		 * 
		 * @param string $title the title of the movie that you want to search.
		 * @return array $this->movies array of movie that matching to the title.
		 */
		
		public function getMoviesByTitle($title) {
			unset($this->movies);																		/*Clear movies array*/
			
			$this->db_manager->openConnection();														/*Open Connection.*/
			
			$sql = "select * from Movie where Title like '$title'";										/*Construct SQL statement.*/
										
 			$result = $this->db_manager->query($sql);													/*Execute SQL statement.*/
			
 			if(DB::isError($result)) {
 				die($result->getMessage());
 			}
 			
			while($result->fetchInto($row)) {															/*Fetch movie into movies.*/
				$this->movies[] = new Movie($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
			}
				
			$this->db_manager->closeConnection();														/*Close connection.*/
				
			return $this->movies;
		}
		
		/**
		 * 
		 * getMoives
		 * 
		 * @return array $this->movies the movies private attribution in MovieDAO 
		 */
		public function getMovies() {
			return $this->movies;																		/*Return movies*/
		}
		
	}
?>