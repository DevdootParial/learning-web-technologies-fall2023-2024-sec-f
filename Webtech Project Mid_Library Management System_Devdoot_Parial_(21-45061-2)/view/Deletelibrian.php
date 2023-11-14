<!DOCTYPE html>
<html>
<title>Delete Librian</title>
<body>
<h2><b>Delete Librian</b></h2>
<form  method="GET" action="../Controller/DeletelibrianCheck.php"enctype="">
  <fieldset style="width:20%">
  <legend><h3><b>Librian Management</b></h3></legend>
  
        <h4>Librian_id: <input type="INT" name="Librianid" value="" > <br>
            Librian_name: <input type="text" name="Librianname" value="" > <br>
            Librian_email: <input type="text" name="Librianemail" value="" > <br>
            Contact_number: <input type="INT" name="Contactnumber" value="" > <br>
            Assigned_role: <input type="text" name="Assignedrole" value="" > <br>
                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>
</body>
</html>
<?php