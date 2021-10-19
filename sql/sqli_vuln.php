<!DOCTYPE html>
<html>
    <head>
    <title>Owasp</title>
    </head>
    <body>
    <!-- http://localhost:80/sql/sqli_vuln.php?password=%27%20or%20name%20=%27Jerome -->
    <?php
        $db = new SQLite3("test.db");
        $res = $db->query("SELECT * FROM users where password = '". $_GET['password'] . "'")

    ?>

    <?php    var_dump($res->fetchArray()) ?>
    </body>
</html>
