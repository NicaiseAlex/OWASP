<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <!-- http://localhost:80/xss/rule_5_vuln.php?xss=bo%22%20onerror=%22alert(%27Attack%27) -->
  <body>
    <img src="<?php echo $_GET['xss'] ?>" >
  </body>
</html>