<?php
include_once("../Controller/view_userCheck.php");
include_once("../Controller/userData.php");

?>
<center>
	<h1><strong>Welcome To Your Dashboard <?php echo $user['name'] ?>!</strong></h1>
	<h3><a href="profile.php">Profile</a>
	<br />
	<a href="Recommended_Books.php">Recommend Books</a>
	<br/>
	<a href="Help_and_Support_User.php">Need Help!!!</a>
	<br />
	<!--<a href="change_password.php">Setting- Change Password</a>
	<br />-->
	<a href="../Controller/logout.php">Logout</a></h3>
	<br />
	<h2><colspan="2" align="center"><a href="WelcomePage.php">Go to Main Page</a></h2>
</center>
		