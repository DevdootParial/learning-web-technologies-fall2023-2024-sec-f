<?php
   session_start();
  require_once('../model/function.php');
  if (isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Messege=$_POST['Messege'];
   
    if( $Name == "" || $Email== ""|| $Subject== ""||  $Messege== ""){
        echo "Please Enter Data first"; 
        echo '<br>';
        echo '<a href="../view/Send_msg.php">Go Back </a>';   
    }else{
        $_SESSION['flag'] = "true";
        $Users = ['Name'=>$Name,'Email'=> $Email,'Subject'=> $Subject ,'Messege'=> $Messege];
        $status = SendMsg($Users);
        if($status){
           
            header('location: ../view/Thanksformsg.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>