<?php include('../includes/db_connect.php');?>
<?php
$running = "SELECT * FROM history";
$runQuery=mysqli_query($db, $running);
?>


<form method="post" action="approve_winners.php">
    <table class="table table-hover">
        <thead>
            <th>LUDO ID</th>
            <th>ROOM ID</th>
            <th>WINNER PHONE NO:</th>
            <th>STATUS</th>
            <th>LOOSER PHONE NO:</th>
            <th>AMOUNT</th>
        </thead>
        <tbody>
            <?php while ($r=mysqli_fetch_assoc($runQuery)) {
          ?>
            <tr id="<?php echo $r['winner']; ?>">
                <td><span class="badge badge-primary"><?php  echo $r['ludo_id']; ?></span></td>
                
                <td><span class="badge badge-primary"><?php  echo $r['room_id']; ?></span></td>

                <td><span class="badge badge-danger"><?php echo $r['winner']; ?></span></td>

                <td><button type="button" onclick="post(<?php  echo $r['winner']; ?>);" class="btn btn-sm btn-success">send</button></td>

                 <td><span class="badge badge-danger"><?php echo $r['looser']; ?></span></td>

                <td><?php  echo $r['amount']; ?></td>


            </tr>
            <?php  } ?>
        </tbody>

    </table>
</form>