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
//http://localhost/xss/rule_7_vuln.php?xss=`%3Ciframe%20src=javascript:alert(1)%3E`
 document.getElementById("xss").innerHTML = <?php echo $_GET['xss'] ?>
</script>
