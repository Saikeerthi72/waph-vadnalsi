<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login page</title>
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
    <h1>Simple login application</h1>
    <div id="digit-clock"></div>  
    <?php
      echo "Visited time: " . date("Y-m-d h:i:sa");
    ?>
    <form action="index.php" method="POST" class="form login">
      Username:<input type="text" class="text_field" name="username" /> <br>
      Password: <input type="password" class="text_field" name="password" /> <br>
      <button class="button" type="submit">Login</button>
    </form>
    <button class="signup-btn" onclick="window.location.href='registrationform.php'">Signup</button>
    <a href="changepasswordform.php" class="link">Forgot Password?</a>
  </div>
</body>
</html>
