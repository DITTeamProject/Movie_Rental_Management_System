<html>
	<head>
		<title>Administrator Login</title>
	</head>
	<body>
		<?php
			if(isset($_REQUEST['error'])) {
				$error = $_REQUEST['error'];
				
				if($error == '1') {
		?>
			<font color="red">Wrong Username, Please try again.</font>
		<?php 
				} else if($error == '2') {
		?>
			<font color="red">Wrong Passwrod, Please try again.</font>
		<?php
				} else if($error == '3') {
		?>
			<font color="red">Please login first.</font>
		<?php		}
			}
		?>
		<form method="POST" action="administrator_login.php">
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login" /></td>
				</tr>
			</table>
			<input type="hidden" name="action" value="administrator_login" />
		</form>
	</body>
</html>