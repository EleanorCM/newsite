<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do While Loops</title>
</head>
<body>
    <h1>While/Do While Loops</h1>
    <?php

    $grade = 5;

    //Pre-Condition Loop
    while($grade<10) {
        echo '<p>I am less than 10</p>';
        $grade++;
    }

    //Post-Condition Loop
    //by the time the condition is evaluated the 'do' has already been executed once
    do{
        echo '<p>I am a do while loop</p>';
        $grade++;
    } while ( $grade < 10)

    ?>
</body>
</html>