<!DOCTYPE html>
<html>
<head>
    <title>html aman</title>
</head>
<body>
    <!-- <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="submit">
    </form>

    <form method="post" action="">
        <label for="input">Masukkan email:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="submit">
    </form> -->

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $input = $_POST['input'];
    //     $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    //     echo "<p>Hasil input: $input</p>";
    // }
    
    $email = $_POST['email'];
    $emailErr = "";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        echo "email valid " . $email;
    } else {
        echo $emailErr = "Format email tidak valid";
    }
    ?>

    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <input type="submit" value="Kirim">
    </form>

</body>
</html>
