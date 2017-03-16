	<?php
	session_start();
		$servername = "localhost";
		$username = "root";
		$password = "atul1234";
		$dbname = "webchat";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$name = $_POST["name"];
		$usrname = $_POST["username"];
		$pswrd = $_POST["password"];
		$_SESSION['login_user']=$usrname;
		$sql = "INSERT INTO registeredtable VALUES('".$name."','".$usrname."','".$pswrd."')";

		if($conn->query($sql) === TRUE)
		{
			 echo "<script type='text/javascript'>alert('Signing up successfull!');window.location.href='chat.php';</script>";
			// header("Location: /app/adminDashboard.html");

		}
		else echo "ERROR:duplicate user name";
	
		$conn->close();
		//echo $drname."<br>";
	?>