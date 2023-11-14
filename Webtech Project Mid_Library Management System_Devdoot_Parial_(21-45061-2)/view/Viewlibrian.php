<?php
  require_once('../model/function.php');
  require_once('../model/db.php');
  $viewlibrian = getviewlibrian();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Librian Database</title>
</head>
<body>


       <!-- <h2><b>User Details</b></h2>-->
<table border="3" style="width:80%" style="height:70%" cellspacing="1" align="center" cellpadding="5">

    <tr>
        
        <th colspan="5"><h2><b>Librian Details</b></h2></th>
        <!--<th colspan="5"><h2><b>User Details</b></h2></th>-->
        
    </tr>
  
     <tr>
        <td>Librian ID</td>
        <td>Librian Name</td>
        <td>Librian Email</td>
        <td>Contact Number </td>
        <td>Assigned Role</td>

       </tr>
             
    
               <?php for($i=0; $i<count($viewlibrian); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewlibrian[$i]['Librian_ID']?></td>
                    <td><?=$viewlibrian[$i]['Librian_Name']?></td>
                    <td><?=$viewlibrian[$i]['Librian_Email']?></td>
                    <td><?=$viewlibrian[$i]['Contact_Number']?></td>
                    <td><?=$viewlibrian[$i]['Assigned_Role']?></td>
                   
            
                   <td>
                       
                       <a href="Updatelibrian.php?id=<?=$viewlibrian[$i]['Librian_ID']?>"> Update</a> 
                      <a href="Deletelibrian.php?id=<?=$viewlibrian[$i]['Librian_ID']?>">Remove  </a>
                      <a href="Addlibrian.php?id=<?=$viewlibrian[$i]['Librian_ID']?>">Add Librian  </a> 
                    </td>
               </tr>    
                    
        <?php 
                    
            }
        ?>
        <colspan="5" align="Center"><a href="admin_home.php">Go Home</a>
            
</table>


       
</body>
</html>