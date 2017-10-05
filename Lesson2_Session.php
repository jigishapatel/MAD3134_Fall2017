<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        // Set session variables
        $_SESSION["name"] = "JK";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set. <br>";
    ?>
    
    <h1> "Hello" </h1>
    
    <?php
   
        // Echo session variables that were set on previous page
        echo $_SESSION["name"] . "'s favorite animal is " . $_SESSION["favanimal"] . ". <br>";
        
        $_SESSION["favanimal"] = "Lion";
        print_r($_SESSION);
    ?>
    
    <h2> "Bye" </h2>
    <?php
        // remove all session variables
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    ?>
</body>
</html>