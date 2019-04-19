<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        'use strict';
        function getToken() {
            var cookies = document.cookie.split(';');
            var csrfSearch = "csrf_token=";
            var csrfToken;
            var el;

            // find csrf cookie
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].trim();
                if (cookie.indexOf(csrfSearch) > -1) {
                    csrfToken = decodeURIComponent(cookie.substring(csrfSearch.length));
                    break;
                }
            }

            // add csrf token to form
            if (csrfToken != null) {
                el = document.createElement("input");
                el.name = "csrf";
                el.type = "text";
                el.hidden = true;
                el.value = csrfToken;
            } else {
                el = document.createElement("p");
                el.className = "error-msg";
                el.innerText = "Error: cookie not found!";
            }

            document.getElementById("testForm").appendChild(el);
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
