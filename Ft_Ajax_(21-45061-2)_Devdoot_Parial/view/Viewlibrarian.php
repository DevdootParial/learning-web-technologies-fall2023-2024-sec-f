<?php
   require_once('../model/db.php');
 require_once('../model/function.php');


  $con = getConnection();
  $sql = "select * from librian";
  $result = mysqli_query($con, $sql);
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Librarian management</title>
</head>
<body>

       
        <h2>Librarian management</h2>
<table  cellspacing="1" cellpadding="5">
  
            
    
<?php while($viewlibrarian = mysqli_fetch_assoc($result)){ ?>
      
           <tr>
           <td>Librian_id:<?=$id=$viewlibrarian['Librian_ID']?> </td>
               </tr>
                    
           
               <tr>
                   
                    <td>Librian_name:<?=$viewlibrarian['Librian_Name']?></td>
                    <td>Librian_email:<?=$viewlibrarian['Librian_Email']?></td>
                    <td>Contact_number:<?=$viewlibrarian['Contact_Number']?></td>
                    <td>Assigned_role:<?=$viewlibrarian['Assigned_Role']?></td>
        
               </tr>
    
                   
               <tr>
            
                   <td>
                   <a href="Addlibrarian.html?Librianid=<?=$viewlibrarian['Librian_ID']?>">AddLibrarian</a> 
                   </td>
                    
               </tr>    
               <tr>
                    <td colspan="2"><hr></td>
               </tr>       
        <?php 
                    
            }
          
        ?>
</table>
    

            
</body>
</html>
