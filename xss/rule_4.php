<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<div>
    Hello world
  </div>
</body>

<style>
  body {
      background-url: <?= htmlspecialchars($_GET['xss']) ?>;
  }
</style>
</html>