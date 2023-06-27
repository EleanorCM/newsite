<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>

    <?php
    // getdate() returns an array
    $datenow = getdate();
    echo "Today's date: <br/>";
    // we use subscript to capture values from the getdate() array
    echo $datenow['mday'] . '<br>';
    echo $datenow['mon'] . '<br>';
    echo $datenow['year'] . '<br>';

    echo "Today's date is " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'];


    echo "<br/>" . time() . "<br/>";

    print date("d/m/y G.i:s");
    print "Today is ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
    
</body>
</html>