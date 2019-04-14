<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h1>CSRF Double Submit Cookies</h1>
    <p>CSRF Double Submit Cookies example</p>
    <div>
        <a href="form.php" class="btn">Test Form</a>
        <br>
        <br>
        <?php if (isset($_SESSION["logged_in"])) {
            echo '<a href="logout.php" class="btn">Logout</a>';
        } else  {
            echo '<a href="login.php" class="btn">Login to continue</a>';
        }
        ?>
    </div>
</body>
</html>
