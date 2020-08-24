<?php include('includes/server.php');?>
<?php include('includes/login_validation.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>



<?php

//Place a withdrawal request


if (isset($_POST['withdraw'])) {
    $user=$_SESSION['user_name'];
    $phone_no=$_POST['phone_no'];
    $amount=$_POST['amount'];

    $check="SELECT chips from chips WHERE user='$phone_no'";
    $res=mysqli_query($db,$check);
    if(mysqli_num_rows($res)==1){
        while($row=mysqli_fetch_assoc($res)){
            $chip=$row['chips'];
            if($chip>=$amount){
                  $insert = "INSERT INTO withdraw_req (user_name, phone_no, amount) VALUES('$user', '$phone_no', '$amount')";
                   mysqli_query($db, $insert);
            }
            else{
                array_push($errors, "Not Enough Chips...");
            }
        }
    }

  
}

$pho=$_SESSION['phone_no'];
$with = "SELECT * FROM withdraw_req WHERE phone_no='$pho'";
$withDraw=mysqli_query($db, $with);
?>


<!--Script to avoid form resubmission-->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<div class="container">
    <h4>
        Sell Tokens
    </h4>
</div>
<hr style="margin:0px 20px;">

<div class="container">
    <div class="row">
       
        <div class="col-md-12">
                <form method="post"  action="sell.php">
                        <?php  if (count($errors) > 0){ ?>
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php include ('includes/errors.php');?></strong>
                            </div>
                            <?php } ?>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Amount</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="amount" placeholder="Withdraw TOKENS">
                                <span class="text-primary">Minimum Withdraw: 50Tokens </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2">Mobile No.</label>
                            <div class="col-sm-10">
                                <input type="number" name="phone_no" class="form-control" placeholder="Paytm number">
                                <span class="text-default">Withdrawal may take upto 6-48 Hours</span>
                            </div>
                        </div>

            
                    <div class="row">
                        <div class="col-6">
                            <a target="_blank" href="https://t.me/ludobuddy"><i class="fa fa-question-circle"></i> <u>Contact Support</u></a>
                        </div>
                        <div class="col-6 text-right">
                            <button name="withdraw" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            
            <br>
            <hr>

            <div class="container">
                <h3>
                    Pending Requests
                </h3>
            </div>
            <div class="container">
                <form method="post" action="home.php">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Paytm_Number
                            </th>
                            <th>Withdrawal Amount</th>
                        </thead>
                        <tbody>
                            <?php while ($r2=mysqli_fetch_assoc($withDraw)) {
          ?>
                            <tr>
                                <td><span class="badge badge-primary"><?php  echo $r2['phone_no']; ?></span></td>
                                <td><span class="badge badge-danger"><?php echo $r2['amount']; ?></span></td>

                            </tr>
                            <?php  } ?>
                        </tbody>

                    </table>
                </form>
            </div>
            
            <div class="container text-danger">
                <p>Note:</p><hr>
                <p>1.At a time only one withdrawal request is allowed</p><br>
                <p>2.Use website registered number only for transactions else chips wont be properly added</p><br><br>
                
                
            </div>


        </div>
    </div>
</div>


<br>
<br>
<br>
<?php include('includes/bottom_nav.php');?>
