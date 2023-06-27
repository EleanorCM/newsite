   
   <?php 
        $title = "String Manipulation";
        include 'includes/header.php' 
    ?>
    <h1>String Manipulation</h1>

    <?php 
    
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "eleanor whitley smith";

    // We use a full stop to concatenate:

    $fullphrase = "<p>".$phrase1.", named ". ucwords($name) .",  ".$phrase2."</p>";
    echo $fullphrase;
    
    // ucfirst() - first letter of string to uppercase
    // ucwords() - first letter of each word to uppercase
    // strtoupper() - whole string to uppercase
    // strtolower() - while string to lowercase 

    echo "Repeat string: " . str_repeat($fullphrase,3);
    echo "<p> Get a substring: ". substr($name, 5, 10);

    echo "<p>Replace one string with another: ".str_replace("stand", "sit", $phrase2)."</p>"; // non-destructive
    echo $fullphrase;

    // trim() - strip whitespace from beginning and end
    // ltrim() - strip whitespace from beginning
    // rtrim() - strip whitespace from end
    ?>
</body>
</html>