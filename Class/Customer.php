<?php
	class Customer {
		private $id = null;
		private $username = null;
		private $password = null;
		private $email = null;
		
		
		/**
		 * 
		 * __construct
		 * 
		 * 
		 * @param int $id
		 * @param string $username
		 * @param string $password
		 * @param string $email
		 */
		public function __construct($id, $username, $password, $email) {
			$this->id = $id;
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}
		
		/**
		 * 
		 * setId
		 * 
		 * 
		 * 
		 * @param int $id
		 */
		public function setId($id) {
			$this->id = $id;
		}
		
		/**
		 * 
		 * setUsername
		 * 
		 * @param string $username
		 */
		public function setUsername($username) {
			$this->username = $username;
		}
		
		/**
		 * 
		 * setPassword
		 * 
		 * 
		 * @param string $password
		 */
		public function setPassword($password) {
			$this->password = $password;
		}
		
		/**
		 * 
		 * setEmail
		 * 
		 * 
		 * @param string $email
		 */
		public function setEmail($email) {
			$this->email = $email;
		}
		
		/**
		 * 
		 * getId()
		 * 
		 * @return int
		 * 
		 */
		public function getId() {
			return $this->id;
		}
		
		/**
		 * 
		 * getUsername()
		 * 
		 * @return int
		 * 
		 */
		public function getUsername() {
			return $this->username;
		}
		
		/**
		 * 
		 * getPassword()
		 * 
		 * @return string
		 * 
		 */
		public function getPassword() {
			return $this->password;
		}
		
		/**
		 * 
		 * getEmail()
		 * 
		 * @return string
		 */
		public function getEmail() {
			return $this->email;
		}
	}
?>