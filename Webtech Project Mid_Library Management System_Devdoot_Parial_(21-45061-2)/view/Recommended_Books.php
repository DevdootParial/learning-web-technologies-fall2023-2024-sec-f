<?php
  require_once('../model/function.php');
  $viewbook = getviewRecommend();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recommended Books</title>
</head>
<body>

       
        <h2>Recommended Books</h2>
<table border="1" width="70%" height="60%" cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Book ID</td>
        <td>Book Name</td>
        <td>Author</td>
        <td>Genre </td>
        <td>Rating</td>

       </tr>
            
    
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewbook[$i]['BookID']?></td>
                    <td><?=$viewbook[$i]['BookName']?></td>
                    <td><?=$viewbook[$i]['Author']?></td>
                    <td><?=$viewbook[$i]['Genre']?></td>
                    <td><?=$viewbook[$i]['Rating']?></td>
                    
                   
            
                  
               </tr>    
                    
        <?php 
                    
            }
        ?>

        <colspan="2" align="center"><a href="user_home.php">Go Home</a>


</table>
    
  
</body>
</html>