<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>
<body>
    <h1>Switch Statements</h1>
    <?php
    $grade = 'c';

    switch($grade){
        case 'A':
            echo 'You are a superstar';
            break;
        case 'B':
            echo 'Well done';
            break;
        default:
            echo 'You are a failure';
    }
    ?>
</body>
</html>