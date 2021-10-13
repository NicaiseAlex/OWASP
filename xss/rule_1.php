<!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
 <div>
   <!-- htmlspecialchars supprime les la prise en compte des caractères spéciaux -->
   <?php echo htmlspecialchars($_GET['xss']) ?>

 </div>
</body>
</html>
