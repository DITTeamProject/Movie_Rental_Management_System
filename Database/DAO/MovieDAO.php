<?php
	include('Class/Movie.php');
	include('Database/DBManager.php');
	
	class MovieDAO {
		private $db_manager = null;
		private $movies = null;
		
		public function __construct() {
			$this->db_manager = new DBManager();
			$movies = array();
		}
		
		public function getAllMovies() {
			unset($this->movies);
			
			$this->db_manager->openConnection();
			
			$sql = 'select * from Movie';
			
			$result = $this->db_manager->query($sql);
			
			while($result->fetchInto($row)) {
				$this->movies[] = new Movie($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
			}
			
			$this->db_manager->closeConnection();
			
			return $this->movies;
		}
		
		public function getMoviesByTitle($title) {
			unset($this->movies);
			
			$this->db_manager->openConnection();
			
			$sql = "select * from Movie where Title like '%$title%'";
										
 			$result = $this->db_manager->query($sql);
				
			while($result->fetchInto($row)) {
				$this->movies[] = new Movie($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
			}
				
			$this->db_manager->closeConnection();
				
			return $this->movies;
		}
		
		public function getMovies() {
			return $this->movies;
		}
		
	}
?>