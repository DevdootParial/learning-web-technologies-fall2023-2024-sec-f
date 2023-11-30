<?php
  include('db.php');
   
   $con = getConnection();

   if (!$con)
   {
       die("Connection failed: " . mysqli_connect_error());
   }
    $Librian_ID=$_POST['Librianid'];
    $Librian_Name=$_POST['Librianname'];
    $Librian_Email=$_POST['Librianemail'];
    $Contact_Number=$_POST['Contactnumber'];
    $Assigned_Role=$_POST['Assignedrole'];
   $sql = "insert into librian (Librian_ID,Librian_Name,Librian_Email,Contact_Number,Assigned_Role,image) values ('{$Librian_ID}','{$Librian_Name}','{$Librian_Email}','{$Contact_Number}','{ $Assigned_Role}')";
   $result = mysqli_query($con, $sql);
   return $result;

   if( $Librian_Name == "" || $Librian_Email== ""|| $Contact_Number== ""|| $Assigned_Role== ""){
    echo "Please Enter Data first";     
    }else{
     
       header('location: ../view/Viewlibrian.php');

    }else{

      echo "Error:";

    }
    
      mysqli_close($con);
    
    
  
?>