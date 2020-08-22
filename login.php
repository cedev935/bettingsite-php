<?php include('includes/server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
        window.history.forward();
    </script>
    <meta name="viewport" content="width=320, initial-scale=1">
    <title>Ludo Legion</title>
    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="resources/bootstrap.min.css">

    <!--    Custom StyleSheet-->
    <link rel="stylesheet" type="text/css" href="resources/login.css">
</head>

<body class="text-center">
    <form class="form-signin" method="post" action="login.php">
        <img src="resources/1b.png" alt="" width="100" height="100">
        <h1 class="h3 font-weight-normal">Login here!</h1>

        <input type="number" name="phone_no" class="form-control" placeholder="Mobile Number" required="">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">

        <button class="btn btn-lg btn-success btn-block" name="login_user" type="submit">Login now</button>
        <br>
        <a ui-sref="forgetpassword" href="forget.php" class="pull-right">Forgot password?</a>
        <hr>
        <div class="pull-right">
            Not an user? <a ui-sref="register" href="register.php">Register</a>
        </div>
        <p class="mt-5 mb-3 text-muted">© Ludo Legion Team</p>
    </form>
    
</body>

</html>
