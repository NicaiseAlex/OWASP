<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <body>
    <div>
    <!-- http://localhost:80/xss/rule_2_vuln.php?xss=%22%3E%3Cscript%3Ealert('Attack')%3C/script%3E -->
    <!-- On ferme les guillemets pour fermer l'attribut classe et y insérer du code js -->
    <p class="<?php echo $_GET['xss'] ?>" ></p>
    </div>
  </body>
</html>