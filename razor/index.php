
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=320, initial-scale=1">

    <title>Ludo Society</title>
    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../resources/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="../resources/jquery-3.5.1.min.js"></script>


    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../resources/bootstrap.min.js"></script>

    <!--    Custom StyleSheet-->
    <link rel="stylesheet" type="text/css" href="../resources/styles.css">

</head>


<nav class="navbar navbar-expand-md navbar-dark  bg-dark fixed-top">

    <a class="navbar-brand">Ludo Society</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a  class="nav-link" href="../home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../razor/">Buy Tokens</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sell.php">Sell Tokens</a></li>
                    <li class="nav-item"><a class="nav-link" href="../transaction.php">Transaction</a></li>
                    <li class="nav-item"><a class="nav-link" href="../settin.php">Settings</a></li>
                    <li class="nav-item"><a class="nav-link"href="../help.php">Help</a></li>
                    <li class="nav-item"><a class="nav-link"href="../admin/admin.php">admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="../terms.php">T & C</a></li>
                    <li class="nav-item"><a class="nav-link"href="../includes/logout.php">Logout</a></li>
                </ul>

        </ul>
    </div>
    
    
</nav>






<br>
<br>
<br>
<br>
<div class="container">
    <h2>Buy TOKENS here</h2>
    <form method="post" action="pay.php" id="checkout-selection">

        <div class="form-group">
            <label class="col-sm-2 control-label">No of TOKENS</label>

            <div class="col-sm-10">
                <input type="number" class="form-control" name="amount" placeholder="TOKENS">
                <span class="text-primary">Minimum Buy: 10 TOKENS </span>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2"> Enter Registered Mobile No.(or else tokens will not be added)</label>
            <div class="col-sm-10">
                <input type="number" name="contact" class="form-control" placeholder="For Payment">
                <span class="text-default">Instant TOKENS into account after successful payment</span>
            </div>
        </div>

        <input type="hidden" name="item_name" value="My Test Product">
        <input type="hidden" name="item_description" value="My Test Product Description">
        <input type="hidden" name="item_number" value="3456">
<!--        <input name="amount" value="49.99">-->
        <input type="hidden" name="address" value="ABCD Address">
        <input type="hidden" name="currency" value="INR">
        <input type="hidden" name="cust_name" value="phpzag">
        <input type="hidden" name="email" value="test@phpzag.com">
<!--        <input name="contact" value="9999999999">-->
        <input type="submit" class="btn btn-primary" value="Buy Now">
<p>PAYTM WALLET ONLY: <b>7075067963</b></p>
        <hr>
        <div class="row">
            <div class="col-6">
                
                <a target="_blank" href=""><i class="fa fa-question-circle"></i> <u>Contact Support</u></a>
            </div>
            
        </div>
    </form>
</div>
<div class="container text-danger">
                <p>Note:</p><hr>
                <p>1.Use website registered number only for transactions else TOKENS wont be properly added</p><br>
                2.If u have amount in your paytm wallet so kindly copy the above  PAYTM WALLET number and send the money and kindly wait for 10mins and if you have and query kindly contact us we will solve the problem as soon as possible
                
            </div>




<!--  USE THIS FOR REFERENECE
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Buy chips here</h2>
            <br><br>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="prod.gif" alt="">
                    <div class="caption">
                        <h4 class="pull-right">50</h4>
                        <h4><a href="#">Testing</a></h4>
                        <p>Choose any payment method you want</p>
                    </div>
                    <form id="checkout-selection" action="pay.php" method="POST">
                        <input type="hidden" name="item_name" value="My Test Product">
                        <input type="hidden" name="item_description" value="My Test Product Description">
                        <input type="hidden" name="item_number" value="3456">
                        <input type="hidden" name="amount" value="49.99">
                        <input type="hidden" name="address" value="ABCD Address">
                        <input type="hidden" name="currency" value="INR">
                        <input type="hidden" name="cust_name" value="phpzag">
                        <input type="hidden" name="email" value="test@phpzag.com">
                        <input type="hidden" name="contact" value="9999999999">
                        <input type="submit" class="btn btn-primary" value="Buy Now">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

