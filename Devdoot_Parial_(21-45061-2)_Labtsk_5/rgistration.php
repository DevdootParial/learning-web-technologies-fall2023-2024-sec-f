<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post" >
<table border="1" cellspacing="0" align="center">
        <tr>
            <td><img src="xcompany.png" alt="" height="75px"></td>
            <td width="450px" align="right">
                <a href="home.php">Home |</a>
                <a href="login.php">Login |</a>
                <a href="rgistration.php">Registration</a>
            </td>
        </tr>
        <td colspan="2">
            <fieldset >
                <legend>REGISTRATION</legend>
                <table border="0" cellspacing="0" align="center" cellpadding="5">
                    <tr>
                        <td>Name</td>
                        <td width="350px">
                            :<input type="text" name="name" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td width="350px">
                            :<input type="email" name="email" value="">
                            <input type="submit"  value="i" title="hint: example@example.com">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td width="350px">
                            :<input type="text" name="username" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td width="350px">
                            :<input type="password" name="password" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td width="350px">
                            :<input type="password" name="confirm_password" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender" id="">Male
                                <input type="radio" name="gender" id="">Female
                                <input type="radio" name="gender" id="">Other
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Date Of Birth</legend>
                                <input type="text" name="day" id="" size="1"> /
                                <input type="text" name="month" id="" size="1"> /
                                <input type="text" name="yaer" id="" size="1"> <i>(dd/mm/yyyy)</i> 
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" id="" value="Submit">
                            <input type="reset" name="reset" id="" value="Reset">
                        </td>
                    </tr>
                    <tr>
                          <td colspan="2" align="center">Copyright &copy; 2017</td>
                    </tr>
                </table>
            </fieldset>
        </td>
</table>
</form>
</body>
</html>