<html>
<head>
    <title>Degree Input</title>
</head>
<body>
    <fieldset>
        <legend>Degree</legend>
        <form action="" method="post">
            <input type="checkbox" name="degree" value="<?php echo isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : ''; ?>" > SSC
            <input type="checkbox" name="degree" value="<?php echo isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : ''; ?>" > HSC
            <input type="checkbox" name="degree" value="<?php echo isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : ''; ?>" > BSc
            <br>
            <hr>
            <input type="submit" id="" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $Degree = $_REQUEST['degree'];

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['degree'])) {
            $Degree = $_POST["degree"];
            echo "<h1>$degree</h1>";
        }

        //echo "<br> <h1>$degree</h1>";
    ?>
</body>
</html>
