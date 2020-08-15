<!DOCTYPE html>
<!--
Copyright (c) 2016 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html>

<head>
    <meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email/Password Authentication Example</title>

    <!-- Material Design Theming -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

    <link rel="stylesheet" href="main.css">

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

    <!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
    <!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->
    <script src="/__/firebase/7.17.1/firebase-app.js"></script>
    <script src="/__/firebase/init.js"></script>

    <script type="text/javascript">
        /**
         * Handles the sign in button press.
         */
        function toggleSignIn() {
            if (firebase.auth().currentUser) {
                // [START signout]
                firebase.auth().signOut();
                // [END signout]
            } else {
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
                // Sign in with email and pass.
                // [START authwithemail]
                firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    // [START_EXCLUDE]
                    if (errorCode === 'auth/wrong-password') {
                        alert('Wrong password.');
                    } else {
                        alert(errorMessage);
                    }
                    console.log(error);
                    document.getElementById('quickstart-sign-in').disabled = false;
                    // [END_EXCLUDE]
                });
                // [END authwithemail]
            }
            document.getElementById('quickstart-sign-in').disabled = true;
        }

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

        /**
         * Sends an email verification to the user.
         */
        function sendEmailVerification() {
            // [START sendemailverification]
            firebase.auth().currentUser.sendEmailVerification().then(function() {
                // Email Verification sent!
                // [START_EXCLUDE]
                alert('Email Verification Sent!');
                // [END_EXCLUDE]
            });
            // [END sendemailverification]
        }

        function sendPasswordReset() {
            var email = document.getElementById('email').value;
            // [START sendpasswordemail]
            firebase.auth().sendPasswordResetEmail(email).then(function() {
                // Password Reset Email Sent!
                // [START_EXCLUDE]
                alert('Password Reset Email Sent!');
                // [END_EXCLUDE]
            }).catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                // [START_EXCLUDE]
                if (errorCode == 'auth/invalid-email') {
                    alert(errorMessage);
                } else if (errorCode == 'auth/user-not-found') {
                    alert(errorMessage);
                }
                console.log(error);
                // [END_EXCLUDE]
            });
            // [END sendpasswordemail];
        }

        /**
         * initApp handles setting up UI event listeners and registering Firebase auth listeners:
         *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
         *    out, and that is where we update the UI.
         */
        function initApp() {
            // Listening for auth state changes.
            // [START authstatelistener]
            firebase.auth().onAuthStateChanged(function(user) {
                // [START_EXCLUDE silent]
                document.getElementById('quickstart-verify-email').disabled = true;
                // [END_EXCLUDE]
                if (user) {
                    // User is signed in.
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    // [START_EXCLUDE]
                    document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
                    document.getElementById('quickstart-sign-in').textContent = 'Sign out';
                    document.getElementById('quickstart-account-details').textContent = JSON.stringify(user, null, '  ');
                    if (!emailVerified) {
                        document.getElementById('quickstart-verify-email').disabled = false;
                    }
                    // [END_EXCLUDE]
                } else {
                    // User is signed out.
                    // [START_EXCLUDE]
                    document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
                    document.getElementById('quickstart-sign-in').textContent = 'Sign in';
                    document.getElementById('quickstart-account-details').textContent = 'null';
                    // [END_EXCLUDE]
                }
                // [START_EXCLUDE silent]
                document.getElementById('quickstart-sign-in').disabled = false;
                // [END_EXCLUDE]
            });
            // [END authstatelistener]

            document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
            document.getElementById('quickstart-sign-up').addEventListener('click', handleSignUp, false);
            document.getElementById('quickstart-verify-email').addEventListener('click', sendEmailVerification, false);
            document.getElementById('quickstart-password-reset').addEventListener('click', sendPasswordReset, false);
        }

        window.onload = function() {
            initApp();
        };
    </script>
</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <!-- Header section containing title -->
        <header class="mdl-layout__header mdl-color-text--white mdl-color--light-blue-700">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
                <div class="mdl-layout__header-row mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--8-col-desktop">
                    <a href="/">
                        <h3>Firebase Authentication</h3>
                    </a>
                </div>
            </div>
        </header>

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

                <!-- Container for the demo -->
                <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                    <div class="mdl-card__title mdl-color--light-blue-600 mdl-color-text--white">
                        <h2 class="mdl-card__title-text">Firebase Email &amp; Password Authentication</h2>
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                        <p>Enter an email and password below and either sign in to an existing account or sign up</p>

                        <input class="mdl-textfield__input" style="display:inline;width:auto;" type="text" id="email" name="email" placeholder="Email" />
                        &nbsp;&nbsp;&nbsp;
                        <input class="mdl-textfield__input" style="display:inline;width:auto;" type="password" id="password" name="password" placeholder="Password" />
                        <br /><br />
                        <button disabled class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-in" name="signin">Sign In</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-up" name="signup">Sign Up</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="mdl-button mdl-js-button mdl-button--raised" disabled id="quickstart-verify-email" name="verify-email">Send Email Verification</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-password-reset" name="verify-email">Send Password Reset Email</button>

                        <!-- Container where we'll display the user details -->
                        <div class="quickstart-user-details-container">
                            Firebase sign-in status: <span id="quickstart-sign-in-status">Unknown</span>
                            <div>Firebase auth <code>currentUser</code> object value:</div>
                            <pre><code id="quickstart-account-details">null</code></pre>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>

</html>