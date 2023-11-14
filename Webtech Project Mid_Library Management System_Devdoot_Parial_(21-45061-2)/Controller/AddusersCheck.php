<?php
   session_start();
  require_once('../model/function.php');
  if (isset($_POST['submit'])){
    $User_ID=$_POST['Userid'];
    $User_Name=$_POST['Username'];
    $User_Email=$_POST['Useremail'];
    $Mobile_Number=$_POST['Mobilenumber'];
    $Actions=$_POST['Actions'];

    if( $User_Name == "" || $User_Email== ""|| $Mobile_Number== ""|| $Actions== ""){
        echo "Please Enter Data first";  
        echo '<br>';
        echo '<a href="../view/Addusers.php">Go Back </a>';
       
    }else{
        $_SESSION['flag'] = "true";
        $Users = ['User_ID'=>$User_ID,'User_Name'=> $User_Name,'User_Email'=> $User_Email ,'Mobile_Number'=> $Mobile_Number, 'Actions'=> $Actions];
        $status = AddUsers($Users);
        if($status){
           
            header('location: ../view/Viewusers.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>