<!DOCTYPE html>
<html>
<title>Update User</title>
<body>
<h2><b>Update User</b></h2>
<form  method="POST" action="../Controller/UpdateusersCheck.php"enctype="">
  <fieldset>
  <legend><h3><b>User Management</b></h3></legend>
  
        <h4>Userid: <input type="INT" name="Userid" value="" > <br>
            Username: <input type="text" name="Username" value="" > <br>
            Useremail: <input type="text" name="Useremail" value="" > <br>
            Mobilenumber: <input type="INT" name="Mobilenumber" value="" > <br>
            Actions: <input type="text" name="Actions" value="" > <br>
           <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>
<td colspan="2" align="center"><a href="../view/Viewusers.php"><h2>Go Back</h2></a></td>
</body>
</html>
<?php