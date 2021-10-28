<!DOCTYPE html>
<html lang="en">
<head>
<?php
    header("Access-Control-Allow-Origin: *");
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (session_start()) {
        setcookie(Cookie1, 1, [
        'expires' => null,
        'path' => '/',
        'domain' => null,
        'secure' => false,
        'httponly' => false,
    ]);
    }
    ?>
    <title>Question 4</title>
    <!-- <script src="http://localhost/question4/delete_cookie.js" defer></script> -->
</head>
<body>
    Test
    <script src="http://a.com/question4/q4.js"></script>
    <!-- <iframe src="http://localhost/question4/q4_iframe.html">
    </iframe> -->
</body>
</html>
