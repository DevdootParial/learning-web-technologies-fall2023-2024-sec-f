<?php
include_once("../Controller/registrationCheck.php")
?>

<center>
    <form action="" method="POST" enctype="">
        <table border="2" width="70%" height="60%" cellspacing="3" cellpadding="1">
            <tr>
                <td>
                    <fieldset>
                        <legend>
                            <h1>REGISTRATION</h1>
                        </legend>
                        Id<br /><input type="text" name="id" value="<?php echo $id ?>" /><br />
                        Password<br /><input type="password" name="password" value="<?php echo $password ?>" /><br />
                        Confirm Password<br /><input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" /><br />
                        Name<br /><input type="text" name="name" value="<?php echo $name ?>" /><br />
                        User Type
                        <hr />
                        <select id="type" name="type" required>
                            <option value="User">USER</option>
                            <option value="Admin">ADMIN</option>
                        </select>
                        <hr />
                        <input type="submit" value="Sign Up" name="submit" />
                        <a href=" login.php">Sign In</a>
                    </fieldset>
                </td>
            </tr>
            <h2><colspan="2" align="center"><a href="WelcomePage.php">Go to Main Page</a></h2>
        </table> 
    </form>
    
</center>

            