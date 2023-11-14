<?php
include_once("../Controller/SessionCheck.php");
include_once("../Controller/userData.php");

?>


<center>
	<table style="width:80%" border="2" cellpadding="5" cellspacing="3">
		<tr  style="height:100px">
			<td colspan="2" align="CENTER" ><h2>Profile</h2></td>
		</tr>
		<tr style="height:80px">
			<td>ID</td>
			<td><?php echo $user['id'] ?>
		</tr>
		<tr style="height:80px">
			<td>NAME</td>
			<td><?php echo $user['name'] ?></td>
		</tr>
		<tr style="height:80px">
			<td>USER TYPE</td>
			<td><?php echo $user['type'] ?></td>
		</tr>
		<tr style="height:100px">
			<td colspan="2" align="center"><a href="../view/user_home.php"><h2>Go Home</h2></a></td>
		</tr>
	</table>
</center>