<?php include('../includes/db_connect.php');?>
<?php
$running = "SELECT * FROM withdraw_req";
$runQuery=mysqli_query($db, $running);
?>


<form method="post" action="withdraw_req.php">
    <table class="table table-hover">
        <thead>
                <th>
                    USERNAME
                </th>
                <th>
                    AMOUNT
                </th>
                <th>STATUS</th>
                <th>PHONE_NO</th>
            </thead>
        <tbody>
            <?php while ($r=mysqli_fetch_assoc($runQuery)) {
          ?>
            <tr id="<?php echo $r['phone_no']; ?>">
                <td><span class="badge badge-primary"><?php  echo $r['user_name']; ?></span></td>

                <td><span class="badge badge-danger"><?php echo $r['amount']; ?></span></td>

                <!--                      If user wants to accept a game set by others-->

                <td><button type="button" onclick="post(<?php  echo $r['phone_no']; ?>);" class="btn btn-sm btn-success">send</button></td>

                <td><?php  echo $r['phone_no']; ?></td>


            </tr>
            <?php  } ?>
        </tbody>

    </table>
</form>