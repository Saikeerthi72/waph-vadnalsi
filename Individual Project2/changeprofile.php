
<?php
    require "session_auth.php";
    $Username = $_SESSION['username'];
    $Fullname = $_REQUEST['new_fullname'];
    $Email = $_REQUEST['new_email'];
    $Phone = $_REQUEST['new_phone'];
    
    if (isset($Username) && isset($Fullname) && isset($Email) && isset($Phone)){

        if (changeprofile($Username, $Fullname, $Email, $Phone)) {
            echo "Profile has been updated";
        } else {
            echo "Update failed";    
        }
    } else {
        echo "Required fields are missing!";
    }

    function changeprofile($Username, $Fullname, $Email, $Phone) {
        $mysqli = new mysqli('localhost', 'keerthi', 'waph1', 'waph_individual');
        if ($mysqli->connect_errno){
            printf("Database connection failed: %s\n", $mysqli->connect_error);
            return FALSE;
        }
        $prepared_sql = "UPDATE users SET Fullname = ?, Email = ?, Phone = ? WHERE Username = ?"; 
        $stmt = $mysqli->prepare($prepared_sql);
        $stmt->bind_param("ssss", $Fullname, $Email, $Phone, $Username);
        if($stmt->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
?>


<br>
<a href="logout.php" class="link">Logout</a>
