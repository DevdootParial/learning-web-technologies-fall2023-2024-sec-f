<?php
   session_start();
  require_once('../model/function.php');
  if (isset($_POST['submit'])){
    $Book_id=$_POST['BookID'];
    $Book_name=$_POST['BookName'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Rating=$_POST['Rating'];


    if(  $Book_name== ""|| $Author== "" || $Genre== "" || $Rating== ""){
        echo "Please Enter Date first"; 
        echo '<br>';
        echo '<a href="../view/Newly_listed_Books.php">Go Back </a>';  
    }else{
        $_SESSION['flag'] = "true";
        $BooksRecomnd = ['BookID'=> $Book_id, 'BookName'=> $Book_name,'Author'=> $Author, 'Genre'=> $Genre, 'Rating'=> $Rating];
        $status = RecommendB($BooksRecomnd);
        if($status){
           
            header('location: ../view/Newly_listed_Books.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>