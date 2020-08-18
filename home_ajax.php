<?php
include('includes/server.php');
    
    $phone_no=$_POST['postphone'];
    $reject = "DELETE FROM open WHERE phone_no='$phone_no'";
    mysqli_query($db, $reject);
    
    
    $player1=$_SESSION['user_name'];
    $amount=50;
    $player2=$_POST['postplayer'];
    
    
    $query1 = "INSERT INTO running (player1, player2, amount) 
  			  VALUES('$player1', '$player2', '$amount')";
  	$GameQuery=mysqli_query($db, $query1);
    
    if(!$GameQuery){
        die('Unable to set game now');
    }
      else{
        echo "Game set successfully";
      } 

?>
