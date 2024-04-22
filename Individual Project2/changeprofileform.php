<?php
  require "session_auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Change Profile</title>
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
    <h1>Change Profile</h1>
    <div id="digit-clock"></div>  
    <?php
      echo "Visited time: " . date("Y-m-d h:i:sa")
    ?>
    <form action="changeprofile.php" method="POST" class="form login">
      Username: <?php echo htmlentities($_SESSION['username']); ?>
      <br>
      New Fullname: <input type="text" class="text_field" name="new_fullname" /> <br>
      New Email: <input type="email" class="email" name="new_email" /> <br>
      New Phone: <input type="tel" id="phone" name="new_phone" class="phone" placeholder="Enter your phone number" /> <br>
      <button class="button" type="submit">Change Profile</button>
    </form>
  </div>
</body>
</html>
