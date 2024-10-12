<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
</head>
<body>
    <?php

        $number = 2;

        echo "Even numbers between 1 and 20: ";
        while ($number <= 20) {
            echo $number . " ";
            $number += 2; 
        }
    ?>
</body>
</html>