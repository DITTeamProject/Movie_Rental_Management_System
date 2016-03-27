<?php
	class Comment {
		private $comment_id = null;
		private $movie_id = null;
		private $customer_id = null;
		private $star = null;
		private $content = null;
		
		public function __construct($comment_id, $movie_id, $customer_id, $star, $content) {
			$this->comment_id = $comment_id;
			$this->movie_id = $movie_id;
			$this->customer_id = $customer_id;
			$this->star = $star;
			$this->content = $content;
		}
		
		public function setCommentID($comment_id) {
			$this->comment_id = $comment_id;
		}
		
		public function setMovieID($movie_id) {
			$this->movie_id = $movie_id;
		}
		
		public function setCustomerID($customer_id) {
			$this->customer_id = $customer_id;
		}
		
		public function setStar($star) {
			$this->star = $star;
		}
		
		public function setContent($content) {
			$this->content = $content;
		}
		
		public function getCommentID() {
			return $this->comment_id;
		}
		
		public function getMovieID() {
			return $this->movie_id;
		}
		
		public function getCustomerID() {
			return $this->customer_id;
		}
		
		public function getStar() {
			return $this->star;
		}
		
		public function getContent() {
			return $this->content;
		}
	}
?>