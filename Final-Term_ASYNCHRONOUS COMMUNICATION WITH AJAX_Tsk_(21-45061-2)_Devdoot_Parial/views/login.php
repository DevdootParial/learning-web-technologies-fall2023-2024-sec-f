<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>

<body>
    <h2><form align="center">

        Email:
        <input type="text" name="email" id="email" />
        <br />

        Password : <input type="text" name="password" id="password" />
        <br />

        <input type="button" name="submit" id="submit" value="login" onclick="validate()" /><br />
        <button>
            <a href="registration.html">Go To Register</a></button><br />
        <p id="error" style="color: red"></p>
    </form></h2>
    <script src="../assets/login.js"></script>
</body>

</html>