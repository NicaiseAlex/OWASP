<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <body>
    <script>
        // Run rule_3.js and come to this url with updated xss payload 
        alert(<?php echo ($_GET['xss']) ?>)
    </script>
  </body>
</html>