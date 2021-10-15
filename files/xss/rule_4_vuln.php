<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <!-- http://localhost:80/xss/rule_4_vuln.php?xss=;%3C/style%3E%3Cscript%3Ealert(%27attack%27)%3C/script%3E -->
  <body>
    <div>
      Hello world
    </div>
    <style>
      body {
          background-url: <?= $_GET['xss'] ?>;
          color: red;
      }
    </style>
  </body>
</html>