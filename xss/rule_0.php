<!DOCTYPE html>
<html>
  <head>
  <title>Owasp</title>
  </head>
  <body>
    <div>
      <!-- NEVER PUT UNTRUSTED DATA HERE -->
      <?php echo htmlspecialchars($_GET['xss']) ?> <!-- Next solution -->
    </div>
    <script></script>
    <!-- <NEVER PUT UNTRUSTED DATA HERE... href="/test" /> -->
    <style>
        /* NEVER PUT UNTRUSTED DATA HERE... */
    </style>
  </body>
</html>