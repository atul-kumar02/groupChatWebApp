<?php
// Start the session
session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
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
		
		$sql = "SELECT name FROM registeredtable WHERE username='".$usrname."'AND password='".$pswrd."'";

         if($conn->query($sql))
         {
	      
			$_SESSION['login_user']=$usrname; // Initializing Session
            header("location: chatbox.php"); // Redirecting To Other Page
		   
        }
		
		else {
            $error = "Username or Password is invalid";
             }
	
		$conn->close();
		//echo $drname."<br>";
}
}
		
	?>