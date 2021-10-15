<!DOCTYPE html>
<html>
  <head>
    <title>Owasp</title>
  </head>
  <body>
    <div>
      Hello world
    </div>
    <style>
      body {
          background-url: <?= htmlspecialchars($_GET['xss']) ?>;
          color: red;
      }
    </style>
  </body>
</html>