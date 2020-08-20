<?php

include('includes/server.php');


$user=$_SESSION['user_name'];
$running="SELECT * from running WHERE player1='$user' or player2='$user'";
$res=mysqli_query($db,$running);
if(mysqli_num_rows($res)==1){
  header('location:room.php');
}
?>