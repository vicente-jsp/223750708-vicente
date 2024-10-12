<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
</head>
<body>
    <form method="post" action="">
        <label for="input_string">Enter a string:</label>
        <input type="text" id="input_string" name="input_string" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $input_string = $_POST["input_string"];
            $reversed_string = "";
            
            $length = strlen($input_string);

            for ($i = $length - 1; $i >= 0; $i--) {
                $reversed_string .= $input_string[$i];
            }

            echo "Input: \"$input_string\"<br>";
            echo "Output: \"$reversed_string\"";
        }
    ?>
</body>
</html>