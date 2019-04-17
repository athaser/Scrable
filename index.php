<?php
include('process.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header( "refresh:0;url=game.php" );
}
?> 

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Scrable</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="post" action="http://localhost/scrable/process.php">
			<input id="name" type="text" name="username" placeholder="Username">
			<input id="password" type="password" name="password" placeholder="Password">
			<button name="submit" type="submit" id="login-button">Login</button>
		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
 



</body>

</html>
