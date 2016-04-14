<?php
	class Movie {
		private $id = null;
		private $title = null;
		private $genre = null;
		private $price = null;
		private $cover = null;
		private $duration = null;
		
		/**
		 * 
		 * __construct
		 * 
		 * @param int $id
		 * @param string $title
		 * @param string $genre
		 * @param float $price
		 * @param string $cover
		 * @param string $duration
		 */
		public function __construct($id, $title, $genre, $price, $cover, $duration) {
			$this->id = $id;
			$this->title = $title;
			$this->genre = $genre;
			$this->price = $price;
			$this->cover = $cover;
			$this->duration = $duration;
		}

		/**
		 * 
		 * setId()
		 * 
		 * 
		 * @param unknown $id
		 */
		public function setId($id) {
			$this->id = $id;
		}

		/**
		 * 
		 * setTitle
		 * 
		 * 
		 * @param string $title
		 */
		public function setTitle($title) {
			$this->title = $title;
		}

		/**
		 * 
		 * setGenre()
		 * 
		 * 
		 * @param string $genre
		 */
		public function setGenre($genre) {
			$this->genre = $genre;
		}
	
		/**
		 * 
		 * 
		 * getPrice()
		 * 
		 * 
		 * @param float $price
		 */
		public function setPrice($price) {
			$this->price = $price;
		}

		/**
		 * 
		 * setCover()
		 * 
		 * @param string $cover
		 */
		public function setCover($cover) {
			$this->cover = $cover;
		}

		/**
		 * 
		 * setDuration()
		 * 
		 * 
		 * @param string $duration
		 */
		public function setDuration($duration) {
			$this->duration = $duration;
		}

		/**
		 * 
		 * getId()
		 * 
		 * 
		 * @return int
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * 
		 * getTitle()
		 * 
		 * 
		 * 
		 * @return string
		 */
		public function getTitle() {
			return $this->title;
		}

		/**
		 * 
		 * 
		 * getGenre()
		 * 
		 * 
		 * 
		 * @return string
		 * 
		 */
		public function getGenre() {
			return $this->genre;
		}
		
		/**
		 * 
		 * getPrice()
		 * 
		 * 
		 * @return float;
		 */
		public function getPrice() {
			return $this->price;
		}

		/**
		 * 
		 * getCover()
		 * 
		 * 
		 * @return string
		 */
		public function getCover() {
			return $this->cover;
		}

		/**
		 * 
		 * getDuration
		 * 
		 * 
		 * @return string
		 * 
		 */
		public function getDuration() {
			return $this->duration;
		}
	}
?>
