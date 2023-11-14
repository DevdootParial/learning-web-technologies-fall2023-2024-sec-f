<?php 
require_once '../model/function.php';
    //session_start();
    if(isset($_GET['Librianid'])){
        $Librian_ID = $_GET['Librianid'];
        
        $status = DeleteLibrian($Librian_ID);
        if($status){
            header('location: ../view/Viewlibrian.php'); 
        }else{
            echo "DB error, try again";
        }
}
    
?>
