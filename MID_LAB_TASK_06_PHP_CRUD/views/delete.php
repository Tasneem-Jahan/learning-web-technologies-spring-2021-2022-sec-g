<?php
require('header.php');
?>

<html>

<body>
	<form action="../controllers/delete.php" method="POST">
		<fieldset>
			<legend>DELETE USER</legend>

			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" value="">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" value="">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" name="email" value="">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="delete" value="Delete">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>