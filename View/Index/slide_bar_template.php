<!-- Slide bar module -->

<div class="Slide_Bar">
	<!-- If user dosen't login, show Login and Sign up buttons. -->
	<?php
		session_start();
		if(!isset($_SESSION['customer'])) {
	?>
		<div class="Login_And_Sign_Up">
			<div>
				<form method="GET" action="signup.php">
					<input class="Slide_Bar_Button" type="submit" value="Sign up" />
				</form>
			</div>
			<div>
				<form method="GET" action="login.php">
					<input class="Slide_Bar_Button" type="submit" value="Log in" />
				</form>			
			</div>
		</div>
	<!-- if user login, greet to user. -->
	<?php } else {?>
		<div class="Login_And_Sign_Up">
			<p>Hello, <?= $_SESSION['customer']->getUsername() ?></p>
			<form method="POST" action="index.php">
				<input type="submit" value="Log out" />
				<input type="hidden" name="action" value="logout" />
			</form>
		</div>
	<?php }?>
	<div class="Options">
		<a href="./index.php">Home</a>
	</div>
</div>