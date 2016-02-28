<!-- Slide bar module -->

<div class="Slide_Bar">
	<!-- If user dosen't login, show Login and Sign up buttons. -->
	<?php if(!isset($_SESSION['User'])) {?>
		<div class="Login_And_Sign_Up">
			<form>
				<input class="Slide_Bar_Button" type="button" value="Sign up">
			</form>
			<form>
				<input class="Slide_Bar_Button" type="button" value="Log in">
			</form>
		</div>
	<?php } else {?>
	
	<?php }?>
	<div class="Options">
		<span><a>Home</a></span>
		<span><a>Favourite</a></span>
		<span><a>Account</a></span>
		<span><a>Frients</a></span>
		<span><a>Help?</a></span>
	</div>
</div>