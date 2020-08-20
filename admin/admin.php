<?php include('ad_header.php');?>
<?php include('ad_nav.php');?>
<?php include('../includes/db_connect.php');?>

<?php 

$open="SELECT COUNT(*) FROM open";
$running="SELECT COUNT(*) FROM running";
$open_n=mysqli_query($db,$open);
$run_n=mysqli_query($db,$running);
while ($rows=mysqli_fetch_assoc($open_n)) {
        $op=$rows['COUNT(*)'];  
    }
    while ($row=mysqli_fetch_assoc($run_n)) {
        $ru=$row['COUNT(*)'];  
    }
    $total=$op+$ru;

?>

<br>
<br>
<br>
<br>
<br>

<br>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <table class="table table-lg table-success">
                <tr>
                    <th>TOTAL MATCHES</th>
                    <td><span class="badge badge-primary"><?php echo $total;  ?></span></td>
                </tr>
                <tr>
                    <th>OPEN MATCHES</th>
                    <td><span class="badge badge-danger"><?php echo $op;  ?></span></td>
                </tr>
                <tr>
                    <th>RUNNING MATCHES</th>
                    <td><span class="badge badge-success"><?php echo $ru;  ?></span></td>
                </tr>
            </table>
        </div>
    </div>
</div>