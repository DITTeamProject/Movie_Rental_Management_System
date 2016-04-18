<?php
	session_start();
	if(isset($_SESSION['administrator'])) {
?>
<html>
	<head>
		<title>Insert New Movie</title>
	</head>
	<body>
		<form method="POST" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" >
			<table>
				<tr>
					<td>Title: </td>
					<td><input type="text" name="title" /></td>
				</tr>

				<tr>
					<td>Genre: </td>
					<td><input type="text" name="genre" /></td>
				</tr>

				<tr>
					<td>Price: </td>
					<td><input type="text" name="price" /></td>
				</tr>
				
				<tr>
					<td>Cover: </td>
					<td><input type="file" name="cover" id="cover" /></td>
				</tr>
				
				<tr>
					<td>Duration: </td>
					<td><input type="text" name="duration" /></td>
				</tr>
				
				<tr>
					<td>Embed URL: </td>
					<td><input type="text" name="url" /></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="Submit" onclick="return confirm('Are you sure to submit?')"></td>
				</tr>
			
			</table>
			
			<input type="hidden" name="action" value="insert_new_movie" />
			
		</form>
	</body>
</html>
<?php 
	} else {
		header("Location: ./administrator_login.php?error=3");
	}
?>