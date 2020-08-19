<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<?php include('includes/server.php');?>

<br>
<br>
<br>
<?php 
     $user=$_SESSION['user_name'];
     $ludo_id=$_POST['postid'];
     $que="SELECT ludo_id from running where ludo_id='$ludo_id'";
     $res=mysqli_query($db,$que);
     $query1="SELECT player2 from running where ludo_id='$ludo_id'";
     $res1=mysqli_query($db,$query1);
     $query1="SELECT amount from running where ludo_id='$ludo_id'";
     $res2=mysqli_query($db,$query1);
     $queu="SELECT room_id from running where ludo_id='$ludo_id'";
     $res3=mysqli_query($db,$queu);

?>
<div class="container"><h4>Ludo Match ID:
    <?php 
        
       if (mysqli_num_rows($res) == 1){
        while ($row=mysqli_fetch_assoc($res)) {
            echo $row['ludo_id'];}}?></h4></div>
<br>
<div class="container border border-dark ">
    <form >
       <h2 class="text-center"><?php echo $_SESSION['user_name']; ?> vs <?php 
          if (mysqli_num_rows($res1) == 1){
           while ($row=mysqli_fetch_assoc($res1)) {
              echo $row['player2'];}}?></h2>

       <h4 class="text-center">
        <?php 
          if (mysqli_num_rows($res2) == 1){
           while ($row=mysqli_fetch_assoc($res2)) {
              echo $row['amount'];}}?>
                
        </h4>
       <small><p class="text-center">Play Game in Ludo King App<br>Play Store Link<br>Send message to the opponent<br></p></small>
       <small><p class="text-center"></p></small>
       <small><p class="text-center"></p></small>
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
<h5 class="ml-5">Match Status:</h5>
<input class="ml-5 " type="radio" name="favorite_pet" value="Cats"> I won<br>
<input class="ml-5" type="radio" name="favorite_pet" value="Dogs"> I loss<br>
<input class="ml-5"type="radio" name="favorite_pet" value="Birds"> Cancel<br>
<br><br><br>
<br>
<br>


<?php include('includes/bottom_nav.php');?>