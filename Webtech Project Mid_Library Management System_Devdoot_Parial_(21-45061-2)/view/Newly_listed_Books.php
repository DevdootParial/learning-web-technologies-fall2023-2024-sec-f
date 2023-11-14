<?php
  require_once('../model/function.php');
  require_once('../model/db.php');
  $viewNL_Books = getNL_Books();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Newly listed books</title>
</head>
<body>


       <!-- <h2><b>User Details</b></h2>-->
<table border="3" style="width:60%" style="height:70%" cellspacing="1" align="center" cellpadding="5">

    <tr>
        
        <th colspan="5"><h2><b>Newly listed books</b></h2></th>
        <!--<th colspan="5"><h2><b>User Details</b></h2></th>-->
        
    </tr>
  
     <tr>
        <td>Book ID</td>
        <td>Book Name</td>
        <td>Author</td>
        <td>Genre </td>
        <td>Quantity</td>
     </tr>
             
    
               <?php for($i=0; $i<count($viewNL_Books); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewNL_Books[$i]['Book_ID']?></td>
                    <td><?=$viewNL_Books[$i]['Book_Name']?></td>
                    <td><?=$viewNL_Books[$i]['Author']?></td>
                    <td><?=$viewNL_Books[$i]['Genre']?></td>
                    <td><?=$viewNL_Books[$i]['Quantity']?></td>
                   
            
                
                    
               </tr>        
        <?php 
     
            }
        ?>
            <tr><table>

<form  method="POST" action="../Controller/Book_recommendationCheck.php"enctype="">
<fieldset align="center" style="width:10%">
<legend>Recommend Books</legend>

  Book ID:  <input type="INT" name="BookID" value="" > <br>
  Book Name:  <input type="text" name="BookName" value="" > <br>
  Author:  <input type="text" name="Author" value="" > <br>
  Genre:  <input type="text" name="Genre" value="" > <br>
  Rating: <input type="INT" name="Rating" value="" > <br>
  
    <input type="submit" name="submit" value="submit">

    <colspan="2" align="center"><a href="admin_home.php">Go Home</a>

</fieldset>

</table>             
</tr>
</table>   
</body>
</html>