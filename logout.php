<?php
session_start();
session_unset();
session_destroy();

if(isset($_COOKIE[session_name()])) {
    $expiry = time() - 1000;
    setcookie(session_name(), '', $expiry);
    setcookie("csrf_token", '', $expiry);
}

header("Location: index.php");
?>
