<?php


//Get Values from form in new.html file
$sid=1;
$score=100;


	require 'session.php';

if (isset($_POST['check'])) { 
	$word =  ($_POST['word']);


if ($row['word'] == $word )
 {
	  
   $sid= $srow['sid'];
   $score= $srow['score'];

   
	 $sid++;
     $score=$score+100;

		if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

        else{

$sql = "INSERT INTO games (sid, score, user_id)
values ('$sid','$score','$nid')";
     if ($conn->query($sql)) {
 ///$last_id = $conn->insert_id;
echo "Well Done !!!";

 $sqls = "DELETE FROM help where hid>1" ;
	   if ($conn->query($sqls) === TRUE) {
       echo "";
}
       else {
       echo "Error updating record: " . $conn->error;
}
include 'gameses.php';

}

     else{
     echo "Error: ". $sql ."
     ". $link->error;
}
$conn->close();

}
}

else {	echo "try again";
        header( "refresh:2;url=gameses.php" );
}
}


require('session.php'); 

$m=0;
$h=0;
$c=0;
$h=$row['idw'];



function testfun()
{
	require('session.php'); 

	
global $row, $c, $srow,$nrow, $w;


if($c==1)
{

$string = $row['word'];

       echo ("".$string[0]);
       echo "<br />\n";    

     /// $u = $srow['sid']+1;
	///  $x = $nrow['id'];
	$sc = $srow['score']-10;
	
	
	 $sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";


	   if ($conn->query($sqls) === TRUE){
		       echo " \n";
	echo '<div style="color:red;  margin-top: 100px;">HELP COST: -10 Points</div>';
	       echo "<br />\n";    
	echo '<div style="color:white; margin-top: -30px;">WORD VALUE = 90 Points</div>';

} 
else{
    echo "Error updating record: " . $conn->error;
}

   exit;
}

if($c==2){

$string = $row['word'];

   echo ("".$string[0].$string[1]);
   echo "<br />\n";    

     /// $u = $srow['sid']+1;
	///  $x = $nrow['id'];
	$sc = $srow['score']-10;
	
	
	 $sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";


	   if ($conn->query($sqls) === TRUE){
		       echo " \n";
	echo '<div style="color:red;  margin-top: 100px;">HELP COST: -20 Points</div>';
	       echo "<br />\n";    
	echo '<div style="color:white; margin-top: -30px;">WORD VALUE = 80 Points</div>';

} 
else{
    echo "Error updating record: " . $conn->error;
}
   
      exit;
}

if($c==3)
{

$string = $row['word'];

   echo ("".$string[0].$string[1].$string[2]);
   echo "<br />\n";    

     /// $u = $srow['sid']+1;
	///  $x = $nrow['id'];
	$sc = $srow['score']-10;
	
	
	 $sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";


	   if ($conn->query($sqls) === TRUE){
		       echo " \n";
	echo '<div style="color:red;  margin-top: 100px;">HELP COST: -30 Points</div>';
	       echo "<br />\n";    
	echo '<div style="color:white; margin-top: -30px;">WORD VALUE = 70 Points</div>';

} 
else{
    echo "Error updating record: " . $conn->error;
}

     exit;
}

else
{
	$string = $row['word'];
   echo ("".$string[0].$string[1].$string[2]."");
   echo ("no help remaining, WORD VALUE = 70 Points");
     exit;

}
   
}


///if(array_key_exists('test',$_POST)){
if (isset($_POST['test'])) { 

	global $h;
	  
	///////////////////HHHHEEEEELLLLPPPPPPPPP
	$hresult = mysqli_query($conn,"select * from help WHERE word_id ='$h' && help_id = (SELECT MAX(help_id) FROM help )  " )
or die("Failed to query database ".mysqli_error($conn));
   $hrow = mysqli_fetch_array($hresult);
   
   
   $c= $hrow['help_id']+1;
  /// $m= $hrow['word_id'];
   

	$sqlh = "INSERT INTO help (word_id,help_id)
values ('$h','$c')";

if ($conn->query($sqlh)){
	include 'game.php';

echo '<div style="color:black;  margin-top: -70px;">FIRST WORD LETTERS: </div>';
}
else{
echo "Error: ".$sqlh ."
". $conn->error;
}

	
	   	testfun(); 

   
exit;
}




else {	
       header( "refresh:0;url=game.php" );
}
?>

