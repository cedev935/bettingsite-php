<?php include('ad_header.php');?>
<?php include('ad_nav.php');?>
<?php include('../includes/db_connect.php');?>

<?php
$running = "SELECT * FROM withdraw";
$runQuery=mysqli_query($db, $running);
?>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <form method="post" action="home.php">
        <table class="table table-hover">
            <thead>
                <th>
                    Phone_NO
                </th>
                <th>
                    UserName
                </th>
                <th>Amount</th>
                <th>Transaction Status</th>
            </thead>
            <tbody>

                <?php while ($r2=mysqli_fetch_assoc($runQuery)) {
          ?>
                <tr>
                    <td><span class="badge badge-primary"><?php  echo $r2['phone']; ?></span></td>
                    <td><span class="badge badge-primary"><?php  echo $r2['amount']; ?></span></td>
                    <td><button class="btn btn-success">Money Sent</button></td>

                </tr>
                <?php  } ?>
            </tbody>

        </table>
    </form>
</div>