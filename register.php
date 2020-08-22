<?php include('includes/server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
        window.history.forward();
    </script>
    <title>Ludo Legion</title>
    <meta name="viewport" content="width=320, initial-scale=1">
    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="resources/bootstrap.min.css">

    <!--    Custom StyleSheet-->
    <link rel="stylesheet" type="text/css" href="resources/login.css">

    <!-- Import and configure the Firebase SDK -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-auth.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCBtLUmsLGjl9MHaYeJWu47hWP4fbVX8Ug",
            authDomain: "ludo-legion.firebaseapp.com",
            databaseURL: "https://ludo-legion.firebaseio.com",
            projectId: "ludo-legion",
            storageBucket: "ludo-legion.appspot.com",
            messagingSenderId: "427206387419",
            appId: "1:427206387419:web:3a406c9f0c451247c84efe",
            measurementId: "G-HQE1E9R83H"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>

    <script type="text/javascript">
        /**
         * Handles the sign up button press.
         */
        function handleSignUp() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            if (email.length < 4) {
                alert('Please enter an email address.');
                return;
            }
            if (password.length < 4) {
                alert('Please enter a password.');
                return;
            }
            // Create user with email and pass.
            // [START createwithemail]
            firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                // [START_EXCLUDE]
                if (errorCode == 'auth/weak-password') {
                    alert('The password is too weak.');
                } else {
                    alert(errorMessage);
                }
                console.log(error);
                // [END_EXCLUDE]
            });
            // [END createwithemail]
        }
    </script>

</head>

<body class="text-center">
    <form class="form-signin" method="post" action="register.php" >
        <img class="mb-4" src="resources/lb.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Register here!</h1>

        <input type="text" name="user_name" class="form-control" placeholder="User name" required="" autofocus="">
        <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus="">
        <input type="number" name="phone_no" class="form-control" placeholder="Phone Number" required="">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">

        <button class="btn btn-lg btn-primary btn-block" name="reg_user" type="submit">Register</button>
        <hr>

        <div class="pull-right">
            Already Registered? <a ui-sref="login" href="login.php"> Log
                In</a>
        </div>
        <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
    </form>
</body>

</html>
