<?php
    $cookie_name = "user";
    $cookie_value = "JK";
    setcookie($cookie_name, $cookie_value, time() + (100), "/"); 
    //setcookie($cookie_name, $cookie_value, time() - (100), "/"); 
?>

<html>
<body>

<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set! <br>";
        echo "Setting cookie for the first time.";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>

</body>
</html>