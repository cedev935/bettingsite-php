
    <?php include('server.php'); ?>

    <nav class="navbar navbar-expand-md navbar-dark  bg-dark fixed-top">

    <a class="navbar-brand">Ludo Society</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a  class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="razor/">Buy Tokens</a></li>
                    <li class="nav-item"><a class="nav-link" href="sell.php">Sell Tokens</a></li>
                    <li class="nav-item"><a class="nav-link" href="transaction.php">Transaction</a></li>
                    <li class="nav-item"><a class="nav-link" href="settin.php">Settings</a></li>
                    <li class="nav-item"><a class="nav-link"href="help.php">Help</a></li>
                    <li class="nav-item"><?php if($_SESSION['phone_no'] == '770' && $_SESSION['password'] == 'Team@21' ){ ?>
                <a href="admin/admin.php" class="nav-link">Admin</a>
                <?php } ?></li>
                    <li class="nav-item"><a class="nav-link" href="terms.php">T & C</a></li>
                    <li class="nav-item"><a class="nav-link"href="includes/logout.php">Logout</a></li>
                </ul>

        </ul>
    </div>
    
    
</nav>