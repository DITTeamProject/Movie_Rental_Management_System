<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="Style/signup_style.css">
	</head>
	<body>
		<div class="Block_Top"></div>
		
		<div class="Login">
			<div class="Border">
				<div class="Header">
					<p class="Title"><font color="#538cc6">M</font>ovie <font color="#538cc6">R</font>ental <br><font color="#538cc6">S</font>ystem</p>
				</div>
				<div class="Input">
					<form method="post" action="signup.php">
						<table>
							<tr>								
								<td><input class="Text" type="text" name="username" placeholder=" Username"/></td>
							</tr>
							<tr>
								<td>
									<input class="Text" type="password" name="password" placeholder=" Password"/>
								</td>
							</tr>
							<tr>
								<td>
									<input class="Text" type="email" name="email" placeholder=" Email" />
								</td>
							</tr>
							<tr>
								<td align="center">
									<a href="./login.php"><input class="Button2" type="button" value="Back" /></a>
									<input class="Button" type="submit" value="Register" />
								</td>
							</tr>
						</table>
						<input type="hidden" name="action" value="signup" />
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
