<?php
	include_once('Database/DAO/MovieDAO.php');
	include_once('Database/DAO/CustomerDAO.php');
	
	/**
	 * Model
	 * 
	 *
	 */
	class Model {
		private $movie_dao = null;
		private $customer_dao = null;
		
		/**
		 * __construct
		 * 
		 * 
		 */
		public function __construct() {
			$this->movie_dao = new MovieDAO();
			$this->customer_dao = new CustomerDAO();
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
		
		/**
		 * 
		 * getCustomerByUserName
		 * 
		 * 
		 */
		public function getCustomerByUserName($username) {
			return $this->customer_dao->getCustomerByUserName($username);
		}
	}
?>