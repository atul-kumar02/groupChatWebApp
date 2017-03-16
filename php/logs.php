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

		$usrname=$_SESSION['login_user'];
		
		$sqr="SELECT username,message from messagetable";
		$result = $conn->query($sqr);
		if($result)
		{
			
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
				
					echo "<div class = 'msg'>".$row["username"].":".$row["message"]."</div>";
				}
			}
			// header("Location: /app/adminDashboard.html");

		}
		else echo "ERROR:duplicate user name";
	
		$conn->close();
		//echo $drname."<br>";
	?>