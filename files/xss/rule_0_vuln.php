<!DOCTYPE html>
<html>
  <head>
  <title>Owasp</title>
  </head>
  <body>
    <div>
      <!-- http://localhost:80/xss/rule_0_vuln.php?xss=%3Cscript%3Ealert('Attack')%3C/script%3E -->
      <?php echo $_GET['xss'] ?>
    </div>
  </body>
</html>
