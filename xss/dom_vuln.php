<!DOCTYPE html>
<?php $user = $_GET["user"];?>
<html>
<head>
  <title>Dom based XSS</title>
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
    window.document.getElementById('test').innerHTML = user;
</script>
