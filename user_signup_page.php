<html>
	<head>
		<title>Customer Sign Up</title>
	</head>
	<body>
		<form method="POST" action="create_new_user.php">
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Passwrd: </td>
					<td><input type="password" name="passwd" /></td>
				</tr>
				<tr>
					<td>Repeat: </td>
					<td><input type="password" name="repeat" ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type=submit name="Signup" value="Sign Up" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>