<?php
    // Set a cookie without an expiration date
    $name = "A";
    $value = "A1";
    setcookie($name, $value);

    // Retrieve the cookie value
    if(isset($_COOKIE[$name])) {
        echo "Value is: ". $_COOKIE[$name];
    }
?>
<?php
    $name = "A";
    if(isset($_COOKIE[$name])) {
        echo "Value of cookie is: ". $_COOKIE[$name];
    } else {
        echo "Cookie is not set.";
    }
?>