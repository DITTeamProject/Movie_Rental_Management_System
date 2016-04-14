<?php
	class Comment {
		private $comment_id = null;
		private $movie_id = null;
		private $customer_id = null;
		private $star = null;
		private $content = null;
		
		/**
		 * 
		 * __construct
		 * 
		 * 
		 * @param int $comment_id
		 * @param int $movie_id
		 * @param int $customer_id
		 * @param int $star
		 * @param string $content
		 */
		public function __construct($comment_id, $movie_id, $customer_id, $star, $content) {
			$this->comment_id = $comment_id;
			$this->movie_id = $movie_id;
			$this->customer_id = $customer_id;
			$this->star = $star;
			$this->content = $content;
		}
		
		/**
		 * 
		 * setCommentID
		 * 
		 * 
		 * @param int $comment_id
		 */
		public function setCommentID($comment_id) {
			$this->comment_id = $comment_id;
		}
		
		/**
		 * 
		 * setMovieID
		 * 
		 * 
		 * @param int $movie_id
		 */
		
		public function setMovieID($movie_id) {
			$this->movie_id = $movie_id;
		}
		
		/**
		 * 
		 * 
		 * setCustomerID
		 * 
		 * 
		 * 
		 * 
		 * @param int $customer_id
		 */
		public function setCustomerID($customer_id) {
			$this->customer_id = $customer_id;
		}
		
		/**
		 * 
		 * setStar
		 * 
		 * @param int $star
		 * 
		 */
		public function setStar($star) {
			$this->star = $star;
		}
		
		/**
		 * 
		 * setContent
		 * 
		 * 
		 * @param string $content
		 * 
		 */
		public function setContent($content) {
			$this->content = $content;
		}
		
		/**
		 * 
		 * getCommentID()
		 * 
		 * 
		 * @return int
		 * 
		 */
		public function getCommentID() {
			return $this->comment_id;
		}
		
		/**
		 * 
		 * getMovieID()
		 * 
		 * 
		 * @return int
		 * 
		 */
		public function getMovieID() {
			return $this->movie_id;
		}
		
		/**
		 * 
		 * getCustomerID()
		 * 
		 * 
		 * @return int
		 * 
		 */
		public function getCustomerID() {
			return $this->customer_id;
		}
		
		/**
		 * 
		 * getStar()
		 * 
		 * 
		 * @return int
		 * 
		 */
		public function getStar() {
			return $this->star;
		}
		
		
		/**
		 * 
		 * getContent()
		 * 
		 * 
		 * @return string
		 * 
		 */
		public function getContent() {
			return $this->content;
		}
	}
?>