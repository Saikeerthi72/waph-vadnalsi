<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> User registration </title>
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
    <h1>User registration form</h1>
    <div id="digit-clock"></div>  
    <?php
      echo "Visited time: " . date("Y-m-d h:i:sa")
    ?>
    <form action="addnewuser.php" method="POST" class="form login">
      Username:<input type="text" class="text_field" name="username" /> <br>
      Password: <input type="password" class="text_field" name="password" /> <br>
      Fullname: <input type="text" class="text_field" name="fullname" /> <br>
      Email: <input type="email" class="email" name="email" /> <br>
      Phone: <input type="tel" id="phone" name="phone" class="phone" placeholder="Enter your phone number" /> <br>
      <button class="button" type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
