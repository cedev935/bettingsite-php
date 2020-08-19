<?php
include('includes/server.php');
    
    $phone_no=$_POST['postphone'];
    $reject = "DELETE FROM open WHERE phone_no='$phone_no'";
    mysqli_query($db, $reject);
    
    
    $player1=$_SESSION['user_name'];
    $amount=$_POST['postamount'];
    $player2=$_POST['postplayer'];
    $ludo_id=$_POST['postid'];

    $room_id = mt_rand(100000,999999);  
    $query1 = "INSERT INTO running (ludo_id , room_id, player1, player2, amount) 
  			  VALUES('$ludo_id', '$room_id', '$player1', '$player2', '$amount')";
  	$GameQuery=mysqli_query($db, $query1);
    
    if(!$GameQuery){
        die('Unable to set game now');
    }
      else{
        echo "Game set successfully";
        
      } 

?>
