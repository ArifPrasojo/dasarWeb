<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi input 'input'
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Input Anda : $input";
        } else {
            echo "Input tidak tersedia.";
        }

        // Validasi email
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo " <br> Email Valid Anda  : $email";
            } else {
                echo "Email Tidak Valid.";
            }
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input  :  </label>
        <input type="text" name="input" id="input">
        <br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
