<?php
  require "session_auth.php";
   $rand = bin2hex(openssl_random_pseudo_bytes(16));
  $_SESSION["nocsrftoken"] = $rand;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script>
</head>
<body>
  <div class="container">
    <h1>Change Password</h1>
    <div id="digit-clock"></div>  
    <?php
      echo "Visited time: " . date("Y-m-d h:i:sa")
    ?>
    <form action="changepassword.php" method="POST" class="form login">
      Username: <?php echo htmlentities($_SESSION['username']); ?>
      <br>
      New Password: <input type="password" class="text_field" name="newpassword" /> <br>
        <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>"/>
      <button class="button" type="submit">Change password</button>
    </form>
  </div>
</body>
</html>
