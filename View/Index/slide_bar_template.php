<!-- Slide bar module -->

<div class="Slide_Bar">
	<!-- If user dosen't login, show Login and Sign up buttons. -->
	<?php if(!isset($_SESSION['User'])) {?>
		<div class="Login_And_Sign_Up">
			<div>
				<form>
					<input class="Slide_Bar_Button" type="button" value="Sign up" />
				</form>
			</div>
			<div>
				<form method="GET" action="login.php">
					<input class="Slide_Bar_Button" type="submit" value="Log in" />
				</form>			
			</div>
		</div>
	<?php } else {?>
	
	<?php }?>
	<div class="Options">
		<a href="/index.php">Home</a>
	</div>
</div>