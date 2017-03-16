<?php
// Start the session

		$servername = "localhost";
		$username = "root";
		$password = "atul1234";
		$dbname = "webchat";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		session_start();
		$user_check=$_SESSION['login_user'];
		
		$sql = "SELECT username FROM registeredtable WHERE username='".$user_check."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $login_session =$row['username'];
        if(!isset($login_session))
        {
           $conn->close(); // Closing Connection
           header('Location: chat.php'); // Redirecting To Home Page
        }
		
		
	
		
		//echo $drname."<br>";
	?>