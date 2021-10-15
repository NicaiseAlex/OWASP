<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <body>
  <!-- http://localhost:80/xss/rule_5.php?xss=bo%22%20onerror=%22alert(%27Attack%27) -->
    <img src="<?php 
      $jscode = json_encode($_GET['xss']).');';
      echo htmlentities($jscode) ?>"
    >
  </body>
</html>