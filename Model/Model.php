<?php
	include('Database/DAO/MovieDAO.php');
	
	/**
	 * Model
	 * 
	 *
	 */
	class Model {
		private $movie_dao = null;
		
		/**
		 * 
		 */
		public function __construct() {
			$this->movie_dao = new MovieDAO();
		}
		
		/**
		 * getAllMovies
		 * 
		 * 
		 */
		public function getAllMovies() {
			return $this->movie_dao->getAllMovies();
		}
		
		/**
		 * getMoviesByTitle
		 * 
		 * 
		 * @param string $title
		 */
		public function getMoviesByTitle($title) {
			return $this->movie_dao->getMoviesByTitle($title);
		}
		
		/**
		 * getMovies
		 * 
		 * 
		 */
		public function getMovies() {
			return $this->movie_dao->getMovies();
		}
	}
?>