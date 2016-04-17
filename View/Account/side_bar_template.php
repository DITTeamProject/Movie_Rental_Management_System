<!-- Slide bar module -->
<!-- If user dosen't login, show Login and Sign up buttons. -->


<div class="Greeting">
	<table>
		<tr>
			<td >
				<font color="white">Hello, <?= $_SESSION['customer']->getUsername() ?>!</font>
			</td>
			<td >
				<form method="POST" action="index.php">
					<input type="submit" class="Side_Bar_Button" value="Log out" />
					<input type="hidden" name="action" value="logout" />
				</form>
			</td>
		</tr>
	</table>
</div>

<div id="Side_Bar_Space"></div>

<div id="Options">
	<table>
		<tr>			
			<td align="center"><a href="./index.php">Home</a></td>
		<tr>
		<tr>		
			<td align="center"><a href="./account.php">Account</a></td>
		</tr>
		<tr>			
			<td align="center"><a href="./transaction.php">Transaction</a></td>
		</tr>
		<tr>			
			<td align="center"><a href="./help.php">Help</a></td>
		</tr>
	</table>
</div>