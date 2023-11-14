<?php
  require_once('../model/function.php');
  require_once('../model/db.php');
  $viewusermsg = getviewmsgUser();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Users Messege</title>
</head>
<body>


       <!-- <h2><b>User Details</b></h2>-->
<table  style="width:60%" border="3" cellspacing="1" align="center" cellpadding="5">

    <tr>
        
        <th colspan="5"><h2><b>View Users Messege</b></h2></th>
        <!--<th colspan="5"><h2><b>User Details</b></h2></th>-->
        
    </tr>
  
     <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Messege</td>
       

       </tr>
             
    
               <?php for($i=0; $i<count($viewusermsg); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewusermsg[$i]['Name']?></td>
                    <td><?=$viewusermsg[$i]['Email']?></td>
                    <td><?=$viewusermsg[$i]['Subject']?></td>
                    <td><?=$viewusermsg[$i]['Messege']?></td>
                    
               </tr>   
                  
        <?php       
                    
            }
        ?>

            
                        
</table>

<table style="width:50%" align="center">

<form  method="POST" action="../Controller/RecievedmsgCheck.php"enctype="">
            <fieldset align="Center" style="width:10%">
            <legend>Help and Contact User</legend>
        
              From (Admin):  <input type="text" name="From(Admin)" value="" > <br>
              To (User):  <input type="text" name="To(User)" value="" > <br>
              Admin email:  <input type="text" name="Admin_email" value="" > <br>
              Subject:  <input type="text" name="Subject" value="" > <br>
              Message: <input type="text" name="Messege" value="" > <br>
              
                
            
                <input type="submit" name="submit" value="submit">
                <colspan="2" align="center"><a href="admin_home.php">Go Home</a>
        
            </fieldset>
            
        </table>             




       
</body>
</html>