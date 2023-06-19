<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Printer - Arrays</title>
</head>
<body>
    
    <?php
        $num = 3;

        // PHP can store multiple data types in one array
        // but this is a homogenous array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,60,34,101,264);

        echo $numbers[5];
        $size = count($numbers);
        echo "<p>There are $size elements in this array</p>";

        for ($count=0;$count<$size;$count++) {
            echo "<p>$numbers[$count]</p>";
        }
    ?>

</body>
</html>