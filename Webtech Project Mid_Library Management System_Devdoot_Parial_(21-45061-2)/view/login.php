<?php
include_once("../Controller/loginCheck.php")
?>

<center>
	<form action="" method="POST" enctype="">
		<table border=" 0" width="70%" height="60%"  cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h1>LOGIN</h1>
						</legend>
						User Id<br />
						<input type="text" name="id" value="<?php echo $id ?>" /><br />
						Password<br />
						<input type="password" name="password" value="<?php echo $password ?>" />
						<br />
						<hr />
						<input type="submit" value="Login" name="submit">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
			<colspan="2" align="center"><a href="WelcomePage.php">Go to Main Page</a>
		</table>
		
	</form>
</center>
		



		
