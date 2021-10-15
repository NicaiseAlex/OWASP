<!DOCTYPE html>
<html>
    <head>
    <title>Owasp</title>
    </head>
    <body>
        <div id="xss">  </div>
    </body>
    <script>
        // http://localhost:80/xss/rule_7_vuln.php?xss='<iframe src=javascript:alert("Attack")>'
        document.getElementById("xss").innerHTML = <?php echo $_GET['xss'] ?>
    </script>
</html>