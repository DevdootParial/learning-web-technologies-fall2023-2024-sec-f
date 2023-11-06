<?php
      require_once('db.php');

      function DeleteUsers ($User_ID){
        $con = getConnection();
        $sql = "DELETE FROM users WHERE User_ID=' $User_ID';";
        $status = mysqli_query($con, $sql);
        return $status;
    }



      function UpdateUsers($updateuser)
      {
        $con= getConnection();
        $sql= "UPDATE users
        SET User_Name = '{$updateuser['User_Name']}', 
        User_Email= '{$updateuser['User_Email']}', 
        Mobile_Number= '{$updateuser['Mobile_Number']}', 
        Actions= '{$updateuser['Actions']}'
        WHERE User_ID = '{$updateuser['User_ID']}'";
        
        $result= mysqli_query($con,$sql);
  
        return $result;
      }
      
      function getviewuser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
  
        while($row = mysqli_fetch_assoc($result)){
            //$users = $row;
            array_push($users, $row);
        }
  
        return $users;
     
    }


  function AddUsers($UserInfo){
    $con = getConnection();
    $sql = "insert into users values('','{$UserInfo['User_Name']}','{$UserInfo['User_Email']}', '{$UserInfo['Mobile_Number']}','{$UserInfo['Actions']}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }





