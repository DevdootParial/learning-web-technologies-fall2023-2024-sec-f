<?php
include_once("../Controller/admin_homeCheck.php");
include_once("../model/function.php");
$users = getAllUser();

?>


<center>
    
    <table border="1" style="width:60%" style="height:70%" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="4" align="CENTER">Users</td>
        </tr>

        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>USER TYPE</td>
        </tr>
        <?php for ($i = 0; $i < count($users); $i++) { ?>
            <tr>
                <td><?= $users[$i]['id'] ?></td>
                <td><?= $users[$i]['name'] ?></td>
                <td><?= $users[$i]['type'] ?></td>
            </tr>


        <?php } ?>


        <tr>
            <td colspan="3" align="center">
                <h2><a href="admin_home.php">Go Home</a></h2>
            </td>
        </tr>
    </table>
</center>