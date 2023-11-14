<?php 
require_once '../model/function.php';
    //session_start();
    if(isset($_GET['Userid'])){
        $User_ID = $_GET['Userid'];
        
        $status = DeleteUsers($User_ID);
        if($status){
            header('location: ../view/Viewusers.php'); 
        }else{
            echo "DB error, try again";
        }
}
    
?>
