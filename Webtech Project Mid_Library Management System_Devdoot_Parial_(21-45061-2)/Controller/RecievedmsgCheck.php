<?php
   session_start();
  require_once('../model/function.php');
  if (isset($_POST['submit'])){
    $FromAdmin=$_POST['From(Admin)'];
    $ToUser=$_POST['To(User)'];
    $Admin_email=$_POST['Admin_email'];
    $Subject=$_POST['Subject'];
    $Messege=$_POST['Messege'];

   
    if( $FromAdmin == "" || $ToUser == ""|| $Admin_email == ""|| $Subject == "" || $Messege == ""){
        echo "Please Enter Data first";  
        echo '<br>';
        echo '<a href="../view/viewmsgfromUser.php">Go Back </a>';   
    }else{
        $_SESSION['flag'] = "true";
        $Users = ['From(Admin)'=>$FromAdmin,'To(User)'=>$ToUser,'Admin_email'=> $Admin_email , 'Subject'=> $Subject , 'Messege'=> $Messege];
        $status = RcvMsguser($Users);
        if($status){
           
            header('location: ../view/SuccessfullMsgfromAdmin.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>