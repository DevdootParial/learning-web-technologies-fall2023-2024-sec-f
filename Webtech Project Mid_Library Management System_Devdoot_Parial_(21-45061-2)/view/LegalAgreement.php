<!DOCTYPE html>
<html>
<head>
    <title>****Legal Agreement****</title>
   
</head>
<body>
    <center>
    <h1>Libraray Management System Terms and Conditions</h1>
    
    <form action="" method="post">
        <p>Libraray Management System. Before proceeding, please read and accept our terms and conditions:</p>

        <p><strong>Terms and Conditions</strong></p>
        <p>1. By using our services, you agree to be bound by these terms and conditions. Please read them carefully.</p>
        <p>2. You are responsible for maintaining the confidentiality of your account and password.</p>
        <p>3. We may change or update these terms. Any changes will be effective immediately.</p>
        <p>4. You agree not to use our services for any illegal or unauthorized purpose.</p>
        <p>5. We reserve the right to terminate your account at our discretion.</p>

        <p><strong>Acceptance</strong></p>
        <p><input type="checkbox" name="accept_terms" required> I have read and accept the terms and conditions.</p>

        <p><input type="submit" value="Proceed to Login"></p>
    </form>
    <colspan="2" align="center"><a href="WelcomePage.php">Go to Main Page</a>
    </center>
    
</body>
</html>


<?php
                // Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["accept_terms"])) {
       
        header('location: ../view/login.php');

        
    } else {
        // if User has not accepted the terms and conditions
        echo "Please accept the terms and conditions to proceed.";
    }
}
?>
