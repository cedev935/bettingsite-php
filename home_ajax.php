<?php
include('includes/server.php');
    
    $phone_no=$_POST['postphone'];
    $reject = "DELETE FROM open WHERE phone_no='$phone_no'";
    mysqli_query($db, $reject);
    
    $room_id=$_POST['postroomid'];
    $player1=$_SESSION['user_name'];
    $amount=$_POST['postamount'];
    $player2=$_POST['postplayer'];
    $ludo_id=$_POST['postid'];
    
    $user=$_SESSION['user_name'];
    $running="SELECT * from running WHERE player1='$user' or player2='$user'";
    $res=mysqli_query($db,$running);
    if(mysqli_num_rows($res)==1){
        header('location:room.php');
    }
    else{  
    $query1 = "INSERT INTO running (ludo_id , room_id, player1, player2, amount) 
  			  VALUES('$ludo_id', '$room_id', '$player1', '$player2', '$amount')";
  	$GameQuery=mysqli_query($db, $query1);

    $query2="INSERT INTO history VALUES('NULL','NULL','$ludo_id',$amount)";
    mysqli_query($db,$query2);
    
    if(!$GameQuery){
        die('Unable to set game now');
    }
      else{
        echo "Game set successfully";
        
      } 
    }
?>
