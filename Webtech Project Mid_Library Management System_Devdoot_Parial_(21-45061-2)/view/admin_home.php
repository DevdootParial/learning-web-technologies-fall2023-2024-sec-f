<?php
include_once("../Controller/admin_homeCheck.php");
include_once("../Controller/userData.php");
?>
<center>

	<h1><strong>Welcome <?php echo $user['name'] ?>!</strong></h1>
	<h3><a href="profile.php">Profile</a>
	<br />
	<a href="Viewlibrian.php">Librians Management</a>
	<br />
	<a href="Viewusers.php">Users Management</a>
	<br />
	<a href="Newly_listed_Books.php">Newly Listed Books</a>
	<br/>
	<a href="view_users.php">View Our Users</a>
	<br />
	<a href="viewmsgfromUser.php">Help and support for users</a>
	<br />
	<!--<a href="change_password.php">Setting- Change Password</a>
	<br />-->
	<a href="../Controller/logout.php">Logout</a></h3>
	<br />
	<h2><colspan="2" align="center"><a href="WelcomePage.php">Go to Main Page</a></h2>
</center>
		