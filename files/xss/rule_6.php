<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
    <script type="text/javascript" src="./purify.js"></script>
  </head>
  <body>
    <div id="xss">  </div>
  </body>
  <script>
    // http://localhost:80/xss/rule_6_vuln.php?xss=%27%3Cimg%20src=hello%20onerror=alert(%22Attack%22)%3E%27
    document.getElementById("xs").innerHTML = DOMPurify.sanitize(<?php echo $_GET['xss'] ?>)
  </script>
</html>