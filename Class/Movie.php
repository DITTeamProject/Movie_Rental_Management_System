<?php
	class Movie {
		private $id = null;
		private $title = null;
		private $genre = null;
		private $price = null;
		private $cover = null;
		private $duration = null;

		public function __construct($id, $title, $genre, $price, $cover, $duration) {
			$this->id = $id;
			$this->title = $title;
			$this->genre = $genre;
			$this->price = $price;
			$this->cover = $cover;
			$this->duration = $duration;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setTitle($title) {
			$this->title = $title;
		}

		public function setGenre($genre) {
			$this->genre = $genre;
		}

		public function setPrice($price) {
			$this->price = $price;
		}

		public function setCover($cover) {
			$this->cover = $cover;
		}

		public function setDuration($duration) {
			$this->duration = $duration;
		}

		public function getId() {
			return $this->id;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getGenre() {
			return $this->genre;
		}

		public function getCover() {
			return $this->cover;
		}

		public function getDuration() {
			return $this->duration;
		}
	}
?>
