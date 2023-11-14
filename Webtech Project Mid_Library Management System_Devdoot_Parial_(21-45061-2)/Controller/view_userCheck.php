<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header('location: login.php');
} 
else if ($_SESSION['user']['type'] == "user") {
    header('location: user_home.php');
}
?>