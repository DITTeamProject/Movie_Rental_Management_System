<html>
	<head>
		<title>Customer Log In</title>
	</head>
	<body>
		<form method="POST" action="check_user_login.php">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Login" value="Log in"></td>
				</tr>
			</table>
		</form>
		<?php
			if(isset($_GET['error'])) {
		?>
			<font color="red">Wrong!</font>
		<?php
			}
		?>
	</body>
</html>
