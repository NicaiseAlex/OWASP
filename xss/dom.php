<!DOCTYPE html>
<?php $user = $_GET["user"]; ?>
<html>
<head>
  <title>Dom based XSS</title>
  <script type="text/javascript" src="./purify.min.js"></script>
</head>
<body>
<div id="test">
</div>
<script>
  <?php echo "var user ='$user';";?>
</script>
</body>
</html>
<script>
    window.document.getElementById('test').innerHTML = DOMPurify.sanitize(user);
</script>

