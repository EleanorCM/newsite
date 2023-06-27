   
   <?php 
        $title = "Switch Statements";
        include 'includes/header.php' 
    ?>
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