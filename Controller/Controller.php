<?php
	class Controller {
		private $model;
		
		/**
		 * 
		 * __construction
		 * 
		 * judge the user's action and do the action
		 * 
		 * 
		 * @param Model $model
		 * @param string $action
		 */
		public function __construct($model, $action) {
			$this->model = $model;
			
			switch($action) {
				case 'login':
					$this->customerLogin();
					break;
				case 'logout':
					$this->customerLogout();
					break;
				case 'signup':
					$this->customerSignUp();
					break;
				case 'comment':
					$this->customerComment();
					break;
				case 'rent':
					$this->customerRent();
					break;
				case 'administrator_login':
					$this->administratorLogin();
					break;
				case 'insert_new_movie':
					$this->administratorInsertNewMovie();
					break;
				default:
					break;
			}
		}
		
		/**
		 * 
		 * customerLogin()
		 * 
		 * Customer log in operation
		 * 
		 * 
		 */
		public function customerLogin() {
			$username = $_POST['username'];											/* get username that user input */
			
			$password = $_POST['password'];											/* get password that user input */				
			
			$customer = $this->model->getCustomerByUserName($username);				/* get the object according the username from database */
			
			if($customer != NULL) {													/* if user exist in database */								
				//login successful
				if($customer->getPassword() == $password) {							
					session_start();
					$_SESSION['customer'] = $customer;
					header('Location: ./index.php');
				//login fault
				} else {															/* password is wrong */
					header('Location: ./login.php?error=2');
				}
			} else {
				header('Location: ./login.php?error=1');							/* if user exist in database */
			}
			
		}
		
		public function customerLogout() {
			session_start();
			session_unset('customer');
			session_destroy();
		}
		
		/**
		 * 
		 * Customer fill in the form to sign up
		 * 
		 * 
		 */
		public function customerSignUp() {
			/* get user input */
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			
			/**
			 * 
			 * More check for input data here
			 * 
			 * 
			 */
			
			$customer = $this->model->insertCustomer($username, $password, $email);
			
			session_start();
			$_SESSION['customer'] = $customer;												/* record customer object to seesion */
			header('Location: ./index.php');												/* jump to home page */
		}
		
		
		/**
		 * 
		 * CustomerComment()
		 * 
		 * 
		 * Customer insert comment into sepecific movie
		 * 
		 * 
		 */
		public function customerComment() {
			$star = $_REQUEST['star'];
			$content = $_REQUEST['content'];
			$movie_id = $_REQUEST['movie_id'];
			$customer_id = $_REQUEST['customer_id'];
			
			$this->model->insertNewComment($movie_id, $customer_id, $star, $content);
		}
		
		
		/**
		 * 
		 * CustomerRent
		 * 
		 * 
		 * 
		 * Customer rent sepecific movie
		 * 
		 * 
		 * 
		 */
		public function customerRent() {
			//print_r($_REQUEST);
			$movie_id = $_REQUEST['movie_id'];
			$customer_id = $_REQUEST['customer_id'];
			$cost = $_REQUEST['cost'];
			
			$transaction = $this->model->insertNewTransaction($movie_id, $customer_id, $cost);
			
			/* sent the mail to user block start */
			
			/*$to = $_REQUEST['customer_email'];
			$subject = "Bill From Movie Rental System";
			$message = "Hello";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						
			$res = mail($to, $subject, $message);
			
			if($res) {
				echo "Successful";
			} else {
				echo "Fail";
			}*/
						
			/* sent the mail to user block end */
			
			echo "<script type='text/javascript'>alert('rent successfully!')</script>";			/* Remind user that rent sucessfully */
		}
		
		/**
		 * 
		 * administratorLogin()
		 * 
		 * 
		 * 
		 * 
		 * 
		 * 
		 * 
		 */
		public function administratorLogin() {
			$username = $_POST['username'];														/* get username that user input */
							
			$password = $_POST['password'];														/* get password that user input */
			
			print_r($_POST);
			
			$administrator = $this->model->getAdministratorByUserName($username);				/* get the object according the username from database */
				
			if($administrator != NULL) {														/* if user exist in database */
				//login successful
				if($administrator->getPassword() == $password) {
					session_start();
					$_SESSION['administrator'] = $customer;
					header('Location: ./insert_new_movie.php');
					//login fault
				} else {																		/* password is wrong */
					header('Location: ./administrator_login.php?error=2');
				}
			} else {
				header('Location: ./administrator_login.php?error=1');							/* if user exist in database */
			}
		}
		
		/**
		 * 
		 * administratorInsertNewMovie()
		 * 
		 * 
		 * 
		 * 
		 * 
		 */
		public function administratorInsertNewMovie() {
			$title = $_POST['title'];
			$genre = $_POST['genre'];
			$price = $_POST['price'];
			$duration = $_POST['duration'];
			$url = $_POST['url'];
			
			$cover = str_replace(" ", "_", $title . '.jpg');
						
			/* file upload feature block begins */			
			$target_dir = "Cover/";
			//$target_file = $target_dir . basename($_FILES["cover"]["name"]);
			$target_file = $target_dir . $cover;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
	
			$check = getimagesize($_FILES["cover"]["tmp_name"]);
			
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
				
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["cover"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
					// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
					//echo "The file ". basename( $_FILES["cover"]["name"]). " has been uploaded.";
					$this->model->insertNewMovie($title, $genre, $price, $cover, $duration, $url);
					
					echo "<script type='text/javascript'>alert('insert sucessfully')</script>";
				} else {
					//echo "Sorry, there was an error uploading your file.";
					echo "<script type='text/javascript'>alert('insert not sucessfully')</script>";
				}
			}
			/* upload file feature block ends */
		}
	}
?>