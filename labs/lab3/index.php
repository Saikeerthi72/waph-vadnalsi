<?php
	session_start();    
	if (checklogin_mysql($_POST["username"],$_POST["password"])) {
		$username = htmlspecialchars($_POST['username']);
?>
	<h2> Welcome <?php echo $_POST['username']; ?> !</h2>
<?php		
	}else{
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
		die();
	}
	function checklogin($username, $password) {
		$account = array("admin","1234");
		if (($username== $account[0]) and ($password == $account[1])) 

		  return TRUE;
		else 
		  return FALSE;
  	}
  	function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost','vadnalsi' /*Database username*/, 'waph@UC!2024' /*Database password*/, 'waph' /*Database name*/);
		if($mysqli->connect_errno){
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			exit();
	    }
	    $sql = "SELECT * FROM users WHERE username=? AND password=MD5(?);";
	    $stmt = $mysqli->prepare($sql);
	    $stmt->bind_param("ss", $username, $password);
	    $stmt->execute();
	    //echo "DEBUG>sql = $sql"; //return TRUE;
	    $result = $stmt->get_result();
	    if($result->num_rows ==1)
	    	return TRUE;
	    return FALSE;
	}
?>
