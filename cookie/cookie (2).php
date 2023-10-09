<?php
$cookie_name="user";
$cookie_value="Jon Doe";
setcookie($cookie_name, $cookie_value, time() - 3600 /*(24*60*60)*/);
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '$cookie_name' is not set!";
}else{
    echo "Cookie named '$cookie_name' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
}
?>
