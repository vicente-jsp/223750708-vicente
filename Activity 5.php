<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Numbers</title>
</head>
<body>
    <?php
        
        $sum = 0;
        $number = 1;

        
        while ($number <= 100) {
            $sum += $number;  
            $number++;        
        }

        echo "The sum of numbers from 1 to 100 is: $sum";
    ?>
</body>
</html>