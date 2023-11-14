<?php
  require_once('../model/function.php');
  require_once('../model/db.php');
  $viewuser = getviewuser();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Database</title>
</head>
<body>


       <!-- <h2><b>User Details</b></h2>-->
<table border="3"  style="width:80%" style="height:70%" cellspacing="1" align="center" cellpadding="5">

    <tr>
        
        <th colspan="5"><h2><b>User Details</b></h2></th>
        <!--<th colspan="5"><h2><b>User Details</b></h2></th>-->
        
    </tr>
  
     <tr>
        <td>User ID</td>
        <td>User Name</td>
        <td>User Email</td>
        <td>Mobile Number </td>
        <td>Actions</td>

       </tr>
             
    
               <?php for($i=0; $i<count($viewuser); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewuser[$i]['User_ID']?></td>
                    <td><?=$viewuser[$i]['User_Name']?></td>
                    <td><?=$viewuser[$i]['User_Email']?></td>
                    <td><?=$viewuser[$i]['Mobile_Number']?></td>
                    <td><?=$viewuser[$i]['Actions']?></td>
                   
            
                   <td>
                       
                       <a href="Updateusers.php?id=<?=$viewuser[$i]['User_ID']?>"> Update</a> 
                      <a href="Deleteusers.php?id=<?=$viewuser[$i]['User_ID']?>">Remove  </a>
                      <a href="Addusers.php?id=<?=$viewuser[$i]['User_ID']?>">Add User  </a> 
                    
                    </td>
                    
               </tr>   
               
               
                
                    
        <?php 

                    
                    
            }

            
        ?>

            <colspan="2"  style="width:60%" align="right"><a href="admin_home.php">Go Home</a>
                        
</table>
       
</body>
</html>