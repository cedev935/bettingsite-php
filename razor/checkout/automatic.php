<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->
 <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=320, initial-scale=1">
    
    <title>Ludo Society</title>
    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../resources/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="resources/jquery-3.5.1.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="resources/bootstrap.min.js"></script>

    <!-- Google material design icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--    Custom StyleSheet-->
    <link rel="stylesheet" type="text/css" href="../../resources/styles.css">
</head>

<body>
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

<form action="verify.php" method="POST">
<div class="container"  style="position:fixed;margin-left:20%;margin-top:30%;">
    <button id="rzp-button1"  class="btn btn-primary">Pay with Razorpay</button>
</div>
 
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>
