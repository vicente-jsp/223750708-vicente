<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <?php
    
        $number = 8;
        $factorial = 1;

        for ($i = $number; $i >= 1; $i--) {
            $factorial *= $i;
        }

        echo "Factorial of $number is: $factorial";
    ?>
</body>
</html>