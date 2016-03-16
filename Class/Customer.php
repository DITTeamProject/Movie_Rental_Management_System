<?php
	class Customer {
		private $id = null;
		private $username = null;
		private $password = null;
		private $email = null;
		
		public function __construct($id, $username, $password, $email) {
			$this->id = $id;
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function setUsername($username) {
			$this->username = $username;
		}
		
		public function setPassword($password) {
			$this->password = $password;
		}
		
		public function setEmail($email) {
			$this->email = $email;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function getUsername() {
			return $this->username;
		}
		
		public function getPassword() {
			return $this->password;
		}
		
		public function getEmail() {
			return $this->email;
		}
	}
?>