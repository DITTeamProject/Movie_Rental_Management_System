<?php
	include('Classes/Movie.php');
	include('Classes/User.php');
	
	/*Model class is a component in MVC model, which is used to commiuncate with database*/
	class Model {
		/*movies array is used to store a set of movie read from database*/
		private $movies = array();
		
		/*The construct function of Model class, which do nothing.*/
		public function __construct() {
			;
		}
		
		/*This function is used to fetch movies database from 'Movie' table, and the movie database will be restored in $movies array as attribution in this class.*/
		public function fetch_movies_from_database() {
			/*log in to the localhost database, and $db varible is used to communicate with database*/
			require_once('db_login.php');
			
			/*construct SQL query statement, which will query all movie record from 'Movie' table in database.*/
			$sql = 'select * from Movie';
			
			/*execute query and store all result into $q varible.*/
			$q = $db->query($sql);
			
			/*Check*/
			if(DB::isError($q)) {
				die($q->getMessage());
			}
			
			/*iterate all rows from database and store the row into $movies varible one by one. */
			while($q->fetchInto($row)) {
				$this->movies[] = new Movie($row[0], $row[1], $row[2], $row[3], $row[4]);
			}
			
			/*Disconnect with database.*/
			$db->disconnect();
		}
		
		/*The function is used to access for the private attribuate $movies array, which will return $movies array */
		public function get_movies() {
			return $this->movies;
		}
		
		/*The function is used to check if the user have logged in or not. if user login, it will return true. otherwise, it will reutrn false*/
		public function is_user_login() {
			session_start();
			/*Check session if set the user key in $_SESSION global varible.*/
			return isset($_SESSION['user']);
		}
		
		/*This function is used to check if username and password is match or not though access 'User' table in database. the function access two parameters(User's username and User's password)*/
		public function check_user_login($username, $password) {
			/*Log in database*/
			require_once("db_login.php");
		
			/*construct SQL statement to query the user whose User_Names is match with $username*/
			$sql = "select * from User where User_Name = '$username'";
			
			/*execute query*/
			$q = $db->query($sql);
			

			/*Here need to check the number of result which query from 'Username', because of duplicated username(many users have same user name).*/
			
			/*Check*/
			if(DB::isError($q)) {
				die($q->getMessage());
			}
			
			/*the most match user will be fetch into $q varible.*/
			$q->fetchInto($row);
						
			/*row[0] is user's id.*/
			/*row[1] is user's name.*/
			/*row[2] is user's password.*/
			/*row[3] is user's email address.*/
			
			/*Check the password that user give is match with the password that is read from 'User' table in database.*/
			if($row[2] == $password) {
				/*if that passwords is match, The Model will construct a User object with that information and put into session*/
				session_start();
				$_SESSION['user'] = new User($row[0], $row[1], $row[3]);
				/*redirect path to index page.*/
				header('Location: index.php');
			} else {
				/*if the password is not match, redirect path to user_login_page page and with error result parameter.*/
				header('Location: user_login_page.php?error=wrongpasswd');
			}
			
			/*Disconnect database*/
			$db->disconnect();
		}
		
		/*This function is used to sign up new user. user provide user name, password and email address*/
		public function insert_new_user_into_database($username, $password, $email) {
			/*Access database.*/
			require_once('db_login.php');
			
			/*construct database statement insert new user record into 'User' table in database.*/
			$sql = "insert into User (User_Name, Password, Email) values ('$username', '$password', '$email')";
			
			/*check if insert successfully, it will return true. otherwise, return false.*/
			if($db->query($sql)) {
				return true;
			} else {
				return false;
			}
			
			/*Disconnect with database.*/
			$db->disconnect();
		}
	}
?>