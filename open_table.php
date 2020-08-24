<?php include('includes/server.php');?>




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





                <td hidden><?php  echo $r['phone_no']; ?></td>
                <td hidden><?php  echo $r['roomcode']; ?></td>


            </tr>
            <?php  } ?>
        </tbody>

    </table>
</form>
