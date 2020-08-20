<?php include('includes/server.php');?>

<?php 
$user=$_SESSION['user_name'];
$running="SELECT * from running WHERE player1='$user' or player2='$user'";
$res=mysqli_query($db,$running);
if(mysqli_num_rows($res)==1){
  header('location:room.php');
}
?>


<form method="post" action="home.php">
    <table class="table table-hover">
        <tbody>
            <?php while ($r=mysqli_fetch_assoc($openQuery)) {
          ?>
            <tr id="<?php echo $r['phone_no']; ?>">
                <td><span class="badge badge-primary"><?php  echo $r['user_name']; ?></span></td>

                <td><span class="badge badge-danger"><?php echo $r['amount']; ?></span></td>





                <!--                    If user sets the game-->
                <?php if($_SESSION['phone_no']==$r['phone_no']){
                    ?>
                <td><button name="cancel" type="submit" class="btn btn-sm btn-danger">Cancel</button></td>
                <?php }
                    else{
                    ?>


                <!--                      If user wants to accept a game set by others-->

                <td><button type="button" onclick="post(<?php  echo $r['phone_no']; ?>);" class="btn btn-sm btn-success">Play</button></td>
                <?php } ?>





                <td><?php  echo $r['phone_no']; ?></td>


            </tr>
            <?php  } ?>
        </tbody>

    </table>
</form>