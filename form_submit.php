<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include_once "header.php" ?>
</head>
<body>
    <?php
    if (!empty($_POST) && isset($_POST["csrf"]) && isset($_SESSION["logged_in"]) && isset($_COOKIE["csrf_token"])) {
        $csrf_token = $_COOKIE["csrf_token"];
        if ($csrf_token == $_POST["csrf"]) {
            echo "<p><b>MESSAGE:</b> ".htmlspecialchars($_POST["msg"], ENT_COMPAT, 'UTF-8')."</p>";
        } else {
            echo "<h2 style='color:red'>TOKEN INVALID</h2>";
        }
        echo "<p><b>TOKEN:</b> ".$_POST["csrf"]."</p>";
        echo "<p><b>COOKIE:</b> ".$csrf_token."</p>";
    } else {
        echo "<h2 style='color:red'>ERROR</h2>";
    }
    ?>
    <hr>
    <a href="form.php">Back</a>
</body>
</html>
