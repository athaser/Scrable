<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: indexses.php"); // Redirecting To Home Page 
}
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Scrable</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style2.css">
	  <link rel="stylesheet" href="css/style3.css">


  
</head>

<body>
 <div id="profile">
 <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
 <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>

  <h1 class="header" style="color:black; font-family: BlackCasper, Arial, sans-serif;">SCRABLE</h1>


  <div class="game-bg">

    <div class="score-board">
      <label name='score'>score</label>
      <span id="score"></span>
	  		<?php
		require 'session.php'; 
        $w=$srow['score']-100;
        echo str_shuffle ("").$w;?>
    </div>
	
	
	
	
    <div class='radialtimer' id='timer'></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index2.js"></script>
	
      <div class="c-wrapper card-panel" >
      <div class="scrab-text card-content"  >
	  
        <p id="text-1" class="card isActive" >
		<?php
		require 'session.php';
        echo str_shuffle ("" .$row['word']) ;
?>
</p>
		
        
          <div class="answer input-field card-action">
		  <form method="post" action="http://localhost/scrable/cor.php">
           <input type="text" name="word">
           <button class="button button1" name="check" type="submit">Check</button>
		  </form>
		  </div>

		<div class = "help">
			<form method="post" action="http://localhost/scrable/cor.php">
			<button class="button button2" name="test" type="submit"  style="color:red">Help</button>
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
    </div>
  </div>
</body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>

  

</html>


<style>
@font-face {
  font-family: BlackCasper;
  src: url(/localhost/scrable/font/BlackCasper.ttf’);
}

</style>