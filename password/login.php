<!DOCTYPE html>
<html>

<body>
    <?php
    $db = new SQLite3("../test.db");

    if (isset($_POST['user']) and isset($_POST['pass'])) {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $password_hashed = password_hash($password, PASSWORD_BCRYPT);
        echo 'Password sent to DB: ' . $password_hashed;
        $req = $db->prepare('INSERT INTO users VALUES (:user, :password)');
        $req->bindValue(":user", $username, SQLITE3_TEXT);
        $req->bindValue(":password", $password_hashed, SQLITE3_TEXT);
        $res = $req->execute();
    }


    ?>
    <form action="login.php" method="POST">
        <p>Username</p><input type="text" name="user" id="user" />
        <p>password</p><input type="password" name="pass" id="pass" />
        <br />
        <input type="submit" value="submit" />
    </form>
</body>

</html>
