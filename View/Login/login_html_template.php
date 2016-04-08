<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="Style/login_style.css">
	</head>
	<body>
		<div class="Block_Top"></div>
		
		<div class="Login">
			<div class="Border">
				<div class="Header">
					<p class="Title"><font color="#538cc6">M</font>ovie <font color="#538cc6">R</font>ental <br><font color="#538cc6">S</font>ystem</p>
				</div>
				<div class="Input">
					<form method="post" action="login.php">
						<table>
							<tr>								
								<td><input class="Text" type="text" name="username" placeholder=" Username"/></td>
							</tr>
							<tr>
								<td><input class="Text" type="password" name="password" placeholder=" Password"/>
							
								
								</td>
							</tr>
							<tr><td align="right"><font size="2px"><a href="retrieve_pass_html_template.php">Forgot Password?</a></font></td></tr>
							<tr>
								<td align="center">
									<a href="singup_html_template.html"><input class="Button" type="button" value="Register" /></a>
									<input class="Button" type="submit" value="Login" />
								</td>
							</tr>
						</table>
						<input type="hidden" name="action" value="login">
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
