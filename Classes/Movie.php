<?php
	class Movie {
		private $movie_id;
		private $title;
		private $genre;
		private $price;
		private $cover;
		
		public function __construct($movie_id, $title, $genre, $price, $cover) {
			$this->movie_id = $movie_id;
			$this->title = $title;
			$this->genre = $genre;
			$this->price = $price;
			$this->cover = $cover;
		}
		
		public function set_movie_id($movie_id) {
			$this->movie_id = $movie_id;
		}
		
		public function get_movie_id() {
			return $this->movie_id;
		}
		
		public function set_title($title) {
			$this->title = $title;
		}
		
		public function get_title() {
			return $this->title;
		}
		
		public function set_genre($genre) {
			$this->genre = $genre;
		}
		
		public function get_genre() {
			return $this->genre;
		}
		
		public function set_price($price) {
			$this->price = $price;
		}
		
		public function get_price() {
			return $this->price;
		}
		
		public function set_cover($cover) {
			$this->cover = $cover;
		}
		
		public function get_cover($cover) {
			return $this->cover;
		}
	}
?>