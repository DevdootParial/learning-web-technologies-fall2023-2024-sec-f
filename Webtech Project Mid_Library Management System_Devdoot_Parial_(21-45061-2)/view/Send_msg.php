<!DOCTYPE html>
<html>
<center>
<title>Send Messege</title>
<body>
<h2><b>Send Messege</b></h2>

<form  method="POST" action="../Controller/SendmsgCheck.php"enctype="">




    <fieldset align="center" style= "width:25%" style= "height:50%">
    <legend>Send Messege to Admin</legend>
        
            Provide Your Name:  <input type="text" name="Name" value="" > <br>
            Provide Your Email:  <input type="text" name="Email" value="" > <br>
            Subject:  <input type="text" name="Subject" value="" > <br>
            Describe Your Problem:  <input type="text" name="Messege" value="" > <br>
              
                
            
            <input type="submit" name="submit" value="submit">
            <td colspan="2" align="center"><a href="Help_and_Support_User.php">Go Back</a></td>

        
    </fieldset>
    
</form>
</center>

</body>
</html>
<?php
        