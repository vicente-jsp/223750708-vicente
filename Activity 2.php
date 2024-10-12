<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
</head>
<body>
    <?php
        $correct_password = "password123";
        $password = "";  
        $message = "";   

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST["password"];  

            if ($password === $correct_password) {
                $message = "Access Granted.";
            } else {
                $message = "Incorrect password.";
            }
        }
    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="password">Please enter the password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Submit">
    </form>


    <p><?php echo $message; ?></p>

</body>
</html>