<!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
 <div>
  <!-- De même que la règle 1 pour le htmlspecialchars -->
   <p class="<?php echo htmlspecialchars($_GET['xss']) ?>"></p>
 </div>
</body>
</html>
