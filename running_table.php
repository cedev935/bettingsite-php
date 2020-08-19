<?php include('includes/server.php');?>
           <form method="post" action="home.php">
            <table class="table table-hover">
                <thead>
                    <th>
                        player1
                    </th>
                    <th>player2</th>
                    <th>BetAmount</th>
                </thead>
                <tbody>
                    <?php while ($r2=mysqli_fetch_assoc($runQuery)) {
          ?>
                    <tr>
                        <td><span class="badge badge-primary"><?php  echo $r2['player1']; ?></span></td>
                        <td><span class="badge badge-primary"><?php  echo $r2['player2']; ?></span></td>
                        <td><span class="badge badge-danger"><?php echo $r2['amount']; ?></span></td>

                    </tr>
                    <?php  } ?>
                </tbody>

            </table>
        </form>