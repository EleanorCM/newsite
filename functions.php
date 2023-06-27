<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <?php

        function writeMessage() {
            echo "Have a nice day<br/>";
        }

        writeMessage();
        echo "<hr/>";
        writeMessage();

        function addNumbers($number1, $number2) {
            return $number1 + $number2;
        }

        echo addNumbers(2,3);

    ?>
</body>
</html>