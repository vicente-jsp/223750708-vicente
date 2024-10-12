<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Prime Number Checker</title>
</head>
<body>
    
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $number = $_POST["number"];
            $is_prime = true;  

            
            if ($number < 2) {
                $is_prime = false;  
            } else {
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $is_prime = false;  
                        break;
                    }
                }
            }

            
            if ($is_prime) {
                echo "$number is a prime number.";
            } else {
                echo "$number is not a prime number.";
            }
        }
    ?>
</body>
</html>