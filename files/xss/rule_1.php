<!DOCTYPE html>
<html>
  <head>
  <title>Owasp</title>
  </head>
  <body>
    <div>
      <!-- xss corrected by escaping ()
           & -> &amp;
           < -> &lt;
           > -> &gt;
           " -> &quot;
           ' -> &#x27; -->
      <?php echo htmlspecialchars($_GET['xss']) ?>
    </div>
  </body>
</html>