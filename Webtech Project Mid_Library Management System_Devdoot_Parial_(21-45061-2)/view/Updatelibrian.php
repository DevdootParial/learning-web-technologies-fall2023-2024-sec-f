<!DOCTYPE html>
<html>
<title>Update Librian</title>
<body>
<h2><b>Update Librian</b></h2>
<form  method="POST" action="../Controller/UpdatelibrianCheck.php"enctype="">
  <fieldset>
  <legend><h3><b>Librian Management</b></h3></legend>
  
  <h4> Librian_id: <input type="INT" name="Librianid" value="" > <br>
            Librian_name: <input type="text" name="Librianname" value="" > <br>
            Librian_email: <input type="text" name="Librianemail" value="" > <br>
            Contact_number: <input type="INT" name="Contactnumber" value="" > <br>
            Assigned_role: <input type="text" name="Assignedrole" value="" > <br>
                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>
<td colspan="2" align="center"><a href="../view/Viewlibrian.php"><h2>Go Back</h2></a></td>
</body>
</html>
<?php