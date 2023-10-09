<html>
<head>
    <title>Degree Input</title>
</head>
<body>
    <fieldset>
        <legend>Degree</legend>
        <form action="" method="post">
            <input type="checkbox" name="degree" value="SSC" > SSC
            <input type="checkbox" name="degree" value="HSC" > HSC
            <input type="checkbox" name="degree" value="BSc" > BSc
            <br>
            <hr>
            <input type="submit" id="" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $degree = $_REQUEST['degree'];

        echo "<br> <h1>$degree</h1>";
    ?>
</body>
</html>