<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>
    </body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</html>