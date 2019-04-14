<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        'use strict';
        function getToken() {
            // TODO: Get token from cookie
        }

        document.addEventListener("DOMContentLoaded", function() {
            getToken();
        });
    </script>
</head>
<body>
    <?php include "header.php"; ?>
    <h1>Check CSRF</h1>
    <form action="form_submit.php" method="POST" id="testForm">
        <input type="text" placeholder="Message" name="msg">
        <input type="submit" value="Send" name="submit">
    </form>
</body>
</html>
