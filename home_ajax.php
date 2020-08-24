<?php
include('includes/server.php');


    $phone=$_SESSION['phone_no'];
    $noofchips="SELECT chips from chips where user='$phone'";
    $res=mysqli_query($db,$noofchips);


    if(mysqli_num_rows($res)==1){
        while($row=mysqli_fetch_assoc($res)){
            $chips=$row['chips'];
        }
    }
    $amount=$_POST['postamount'];

    if($chips<$amount)
    {
        
        array_push($errors, "Not enough chips");
    }
    else{
        
        $phone_no=$_POST['postphone'];
    $reject = "DELETE FROM open WHERE phone_no='$phone_no'";
    mysqli_query($db, $reject);
    $reject1 = "DELETE FROM open WHERE phone_no='$phone'";
    mysqli_query($db, $reject1);
    
    $room_id=$_POST['postroomid'];
    $player1=$_SESSION['user_name'];
    $amount=$_POST['postamount'];
    $player2=$_POST['postplayer'];
    $ludo_id=$_POST['postid'];
    
    //on click play update the chips minus the chips from users
    $minus="UPDATE chips set chips=chips-$amount WHERE user_name='$player1'";
    mysqli_query($db,$minus);

    $minus1="UPDATE chips set chips=chips-$amount WHERE user_name='$player2'";
    mysqli_query($db,$minus1);



    // //send mail to player 2
    // $email="SELECT email from users WHERE user_name='$player2'";
    // $res=mysqli_query($db,$email);
    // if(mysqli_num_rows($res)==1){
    //     while($row=mysqli_fetch_assoc($res)){
    //         $email=$row['email'];
    //         $send = mail($email,'LUDO SOCIETY','Hi you opponent is ready Go to http://www.ludosociety.com/room.php for room code ','From :sai325637@gmail.com');
    //     }
    // }
    
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

    $money=$amount;
    $money=$money*2;
    $query2="INSERT INTO history VALUES('NULL','NULL','$ludo_id','$money','$room_id')";
    mysqli_query($db,$query2);
    
    if(!$GameQuery){
        die('Unable to set game now');
    }
      else{
        echo "Game set successfully";
          header('location: room.php');
        
      } 
    }
    }
                                
    
    
?>