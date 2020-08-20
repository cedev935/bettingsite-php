<?php include('includes/server.php');?>
<?php 
     //$ludo_id=$_POST['postid'];
     $user=$_SESSION['user_name'];
     $us="SELECT user_name from users where user_name='$user'";
     $us1=mysqli_query($db,$us);
     $pl="SELECT player1 from running where player1='$user'";
     $pl1=mysqli_query($db,$pl);

     if(mysqli_num_rows($us1)==1 and mysqli_num_rows($pl1)==1){
             $que="SELECT ludo_id from running where player1='$user'";
             $res=mysqli_query($db,$que);
             $query1="SELECT player1,player2 from running where player1='$user'";
             $res1=mysqli_query($db,$query1);
             $query1="SELECT amount from running where player1='$user'";
             $res2=mysqli_query($db,$query1);
             $queu="SELECT room_id from running where player1='$user'";
             $res3=mysqli_query($db,$queu);
           }
           else{
               $que="SELECT ludo_id from running where player2='$user'";
               $res=mysqli_query($db,$que);
               $query1="SELECT player1,player2 from running where player2='$user'";
               $res1=mysqli_query($db,$query1);
               $query1="SELECT amount from running where player2='$user'";
               $res2=mysqli_query($db,$query1);
               $queu="SELECT room_id from running where player2='$user'";
               $res3=mysqli_query($db,$queu);
           }

       
?>
<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>
<div class="container">
    <h4>Ludo Match ID:
        <?php 
        
       if (mysqli_num_rows($res) == 1){
        while ($row=mysqli_fetch_assoc($res)) {
            echo $row['ludo_id'];}}?></h4>
</div>
<br>
<div class="container border border-dark ">
    <form>
        <h2 class="text-center"><?php echo $_SESSION['user_name']; ?> vs <?php 
          if (mysqli_num_rows($res1) == 1){
           while ($row=mysqli_fetch_assoc($res1)) {
              if($row['player1']==$user){echo $row['player2'];}
              else {echo $row['player1'];}
              }}?></h2>

        <h4 class="text-center">
            <?php 
          if (mysqli_num_rows($res2) == 1){
           while ($row=mysqli_fetch_assoc($res2)) {
              echo $row['amount'];}}?>

        </h4>
        <small>
            <p class="text-center">Play Game in Ludo King App<br>Play Store Link<br>Send message to the opponent<br></p>
        </small>
        <small>
            <p class="text-center"></p>
        </small>
        <small>
            <p class="text-center"></p>
        </small>
    </form>
    <div class="container border border-dark m-1 p-2">
        <h3 class="text-center">Room Code:
            <?php 
               
              if (mysqli_num_rows($res3) == 1){
                while ($row=mysqli_fetch_assoc($res3)) {
                  echo $row['room_id'];}}?>
        </h3>
        <h3 class="text-center">Copy Code</h3>
    </div>
    <p class="text-center font-weight-bold">Room created by Ludo Buddy.Join now and start the game when oppnent Joins!</p>
    <p class="text-center text-danger  font-weight-bold">For cancelling the game VIDEO PROOF is necessary otherwise game will not be cancelled..</p>
</div>
<hr>

<div class="container">
    <form action="uploads/upload.php" method="post" enctype="multipart/form-data">

        <h5 class="ml-5">Match Status:</h5>
        <input class="ml-5 " type="radio" name="match_status" value="won"> I won<br>
        <input class="ml-5" type="radio" name="match_status" value="loose"> I loss<br>
        <input class="ml-5" type="radio" name="match_status" value="tie"> Tie<br>
        <br>


        Select screenshot image to upload:
        <div class="row">
            <div class="col-sm-6">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>
                <hr>
            </div>

            <div class="col-sm-6 text-right">
                <input class="btn-success" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
    </form>

</div>

<br>
<br>
<br>
<br>


<?php include('includes/bottom_nav.php');?>