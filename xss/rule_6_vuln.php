<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
  
  <div id="xss">
  </div>
</body>
</html>

<script>
  // http://localhost/OWASP/xss/rule_6_vuln.php?xss=%27%3Cimg%20src=hello%20onerror=alert(%22attack%22)%3E%27
 document.getElementById("xss").innerHTML = <?php echo $_GET['xss'] ?>

</script>
