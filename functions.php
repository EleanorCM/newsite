<?php

    $title = "Functions";
    include "includes/header.php";

?>
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
        // PHP is not strongly typed, so strings can be processed as numbers:
        echo addNumbers("10", "5");
        echo "<br>";

        function changeNum($number) {
            $number += 10;
            echo "Number value after changeNum: " . $number . "<br>";
        }

        // This is PASS BY VALUE - the original value does not change:

        $favouriteNum = 88;
        echo "favouriteNum before changeNum: " . $favouriteNum . "<br>";
        changeNum($favouriteNum);
        echo "favouriteNum after changeNum: " . $favouriteNum . "<br>";
        echo "<hr>";

        // The only way to modify the ORIGINAL value is to PASS BY REFERENCE
        // into the function:

        function changeNumPassByReference(&$number) { // note the ampersand
            $number += 10;
            echo "Number value after changeNum: " . $number . "<br>";
        }

        // Now this function will enact change on the original value:

        echo "favouriteNum before changeNum: " . $favouriteNum . "<br>";
        changeNumPassByReference($favouriteNum);
        echo "favouriteNum after changeNum: " . $favouriteNum . "<br>";
        



    ?>
</body>
</html>