<?php
session_start(); // Starting Session
$_SESSION['userName'] = 'Root'; 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
	if (empty($_POST['username']) || empty($_POST['password'])) { 
		$error = "Username or Password is invalid"; 
	} 
	else{ 
		// Define $username and $password 
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		// mysqli_connect() function opens a new connection to the MySQL server. 
		$conn = mysqli_connect("localhost", "root", "", "scrable"); 
		// SQL query to fetch information of registerd users and finds user match. 
		$query = "SELECT username, password from users where username=? AND password=? LIMIT 1"; 
		// To protect MySQL injection for Security purpose 
		$stmt = $conn->prepare($query); 
		$stmt->bind_param("ss", $username, $password); 
		$stmt->execute(); 
		$stmt->bind_result($username, $password); 
		$stmt->store_result(); 
		
		if($username==admin){
			$_SESSION['login_user'] = $username; // Initializing Session 
            $_SESSION['user_id'] = $id;
			header( "refresh:0;url=admin.php" );
	        mysqli_close($conn); // Closing Connection 
} 

		else{
		if($stmt->fetch()) //fetching the contents of the row { 
			$_SESSION['login_user'] = $username; // Initializing Session 
            $_SESSION['user_id'] = $id;
        header( "refresh:0;url=game.php" );
	} 
	mysqli_close($conn); // Closing Connection 
	} 
	}
?>