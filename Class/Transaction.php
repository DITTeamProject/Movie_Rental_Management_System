<?php
	class Transaction {
		private $transaction_id;
		private $movie_id;
		private $user_id;
		private $rental_date;
		private $return_date;
		private $cost;
		
		public function __construct($transaction_id, $movie_id, $user_id, $rental_date, $return_date, $cost) {
			$this->transaction_id = $transaction_id;
			$this->movie_id = $movie_id;
			$this->user_id = $user_id;
			$this->rental_date = $rental_date;
			$this->return_date = $return_date;
			$this->cost = $cost;
		}
		
		public function getTransactionID() {
			return $this->transaction_id;
		}
		
		public function getMovieID() {
			return $this->movie_id;
		}
		
		public function getUserID() {
			return $this->user_id;
		}
		
		public function getRentalDate() {
			return $this->rental_date;
		}
		
		public function getReturnDate() {
			return $this->return_date;
		}
		
		public function getCost() {
			return $this->cost;
		}
	}
?>