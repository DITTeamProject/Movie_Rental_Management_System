<?php
	class User {
		private $user_id;
		private $username;
		private $email;
		
		public function __construct($user_id, $username, $email) {
			$this->user_id = $user_id;
			$this->username = $username;
			$this->email = $email;
		}
		
		public function get_username() {
			return $this->username;
		}
		
	}
?>