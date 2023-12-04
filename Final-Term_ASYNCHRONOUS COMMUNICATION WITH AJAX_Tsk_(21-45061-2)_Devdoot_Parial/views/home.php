<?php
include("../controllers/homeControl.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
</head>

<body align="center">
   <h1> <p> Personal Information </p></h1>
   <h3>Name : <?= $name ?><br>
    Email ID: <?= $email ?><br>
    Phone : <?= $phone ?><br></h3>

    <script src="../assets/login.js"></script>
</body>

</html>