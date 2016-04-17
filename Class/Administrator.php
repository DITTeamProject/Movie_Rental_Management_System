<?php
	
	class Administrator {
		
		private $id = null;
		private $username = null;
		private $password = null;
		
		public function __construct($id, $username, $password) {
			$this->id = $id;
			$this->username = $username;
			$this->password = $password;
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
		
		public function getId() {
			return $this->id;
		}
		
		public function getUsername() {
			return $this->username;
		}
		
		public function getPassword() {
			return $this->password;
		}
	}
?>