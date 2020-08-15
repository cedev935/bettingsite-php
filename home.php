<?php include('includes/header.php');?>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>

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

<?php include('includes/nav.php');?>



<?php include('includes/bottom_nav.php');?>