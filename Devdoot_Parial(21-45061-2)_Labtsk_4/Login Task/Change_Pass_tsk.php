<?php 
    $currentPassword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypedPassword = $_REQUEST['retypedPassword'];
    
    if ($newPassword == $currentPassword)
    {
        echo "New Password should not be the same as the Current Password";
    }
    elseif ($newPassword != $retypedPassword)
    {
        echo "New Password must match with the Retyped Password";
    }
    else
    {
        echo "Password changing successful";
    }
?>