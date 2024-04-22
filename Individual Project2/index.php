<?php
	session_set_cookie_params(15*60, "/","vadnalsi.waph.io",TRUE,TRUE);
	session_start();    
	if (isset($_POST["username"]) and isset($_POST["password"])) {
		if (checklogin_mysql($_POST["username"], $_POST["password"])) {
			$_SESSION['authenticated'] = TRUE;
			$_SESSION['username'] = $_POST["username"];
			$_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];
		}else{
			session_destroy();
			echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
			die();
		}
	}
	if (!$_SESSION['authenticated'] or $_SESSION['authenticated']!=TRUE) {
		session_destroy();
		echo "<script>alert('You have not login. Please login first!');</script>";
		header("Refresh: 0; url=form.php");
		die();
	}	

    if ($_SESSION["browser"]!= $_SERVER["HTTP_USER_AGENT"]){
    	session_destroy();
    	echo "<script>alert('Session hijacking attack is detected!');</script>";
    	header("Refresh:0; url=form.php");
    	die();
    }

  	function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost', 'keerthi', 'waph1', 'waph_individual');
		if ($mysqli->connect_errno) {
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			exit();
	    }
	    $sql = "SELECT * FROM users WHERE username=? AND password= md5(?);"; 
	    $stmt = $mysqli->prepare($sql);
	    $stmt->bind_param("ss", $username, $password);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    if ($result->num_rows == 1)
	    	return true;
	    return false;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
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
    <h1>Welcome <?php echo htmlentities($_POST['username']); ?>!</h1>
    <div id="digit-clock"></div>  
    <?php
      echo "Visited time: " . date("Y-m-d h:i:sa");
    ?>
    <a href="changepasswordform.php" class="link">Change Password</a> <br>
    <a href="viewprofile.php" class="link">View Profile</a><br>
    
    <a href="logout.php" class="link">Logout</a>
  </div>
</body>
</html>

