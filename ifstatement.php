<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <h1>If Statements</h1>

    <?php 
    
    echo '<h2>If Statement</h2>';

    $grade = 50;

    if ($grade >= 50) {
        echo '<h3 style="color:green">You have passed</h3>';
    } else {
        echo '<h3 style="color:red">You are an abject failure</h3>';
    }

    $grade = 'B';

    if ($grade=='A') {
        echo '<h2 style="color:green">You are a superstar</h2>';
    } elseif ($grade == 'B') {
        echo '<h2 style="color:green">You did well</h2>';
    } else {
        echo '<h2 style="color:red">Give up</h2>';
    }
    
    ?>
</body>
</html>