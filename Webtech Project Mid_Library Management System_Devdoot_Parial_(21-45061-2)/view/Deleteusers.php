<!DOCTYPE html>
<html>
<title>Delete Users</title>
<body>
<h2><b>Delete Users</b></h2>
<form  method="GET" action="../Controller/DeleteusersCheck.php"enctype="">
  <fieldset style="width:20%">
  <legend><h3><b>User Management</b></h3></legend>
  
           <h4> Userid: <input type="INT" name="Userid" value="" > <br>
            Username: <input type="text" name="Username" value="" > <br>
            Useremail: <input type="text" name="Useremail" value="" > <br>
            Mobilenumber: <input type="INT" name="Mobilenumber" value="" > <br>
            Actions: <input type="text" name="Actions" value="" > <br>
                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
  <td colspan="2" align="center"><a href="../view/Viewusers.php"><h2>Go Back</h2></a></td>
</form>
</body>
</html>
<?php