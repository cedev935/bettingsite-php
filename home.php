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
<br>
<br>
<br>

<div class="container" style="padding-bottom: 75px; background: none;" class="ng-scope">

    <div class="row">
        <div class="col-6">
            <h2>Play Ludo</h2>
        </div>
        <div class="col-6 text-right">
            <button class="pull-right btn btn-danger btn-sm" href="#/app/howtoplay"><i class="glyphicon glyphicon-expand"></i>
                How to play?</button>
        </div>
    </div>

    <section style="padding-top: 0px;">
        <div class="row">
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-12">
                <div class="box box-default">

                    <div class="container">
                        <form>
                            <div class="input-group input-group-sm">
                                <input min="50" step="50" style="z-index:0;" type="number" placeholder="Enter Match Amount Here" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min">
                                <span class="input-group-btn">
                                    <button style="z-index:0;" ng-disabled="setBtn" type="submit" class="btn btn-success btn-sm">Set
                                        Game</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <hr>

                    <div class="row" style="background: #f5f5f5">
                        <div class="col-6">
                            <h5>Open Matches</h5>
                        </div>
                        <div class="col-6 text-right"><button class="btn btn-sm btn-primary"><small>Chat with us</small></button></div>

                    </div>
                    <br>
                    <div>
                        <table class="table table-hover">
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </tr>

                        </table>

                    </div>
                    <br>



                    <div class="row" style="background: #f5f5f5">
                        <div class="col-8 text-justify">
                            <h5>Running Matches <span class="badge badge-success ng-binding">34</span></h5>
                        </div>
                        <div class="col-4 text-right">
                            <small>Users Online:18</small>
                        </div>
                    </div>
                    <hr>

                    <div>
                        <table class="table table-hover">
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </tr>

                        </table>

                    </div>
                    <br>


                </div>
            </div>
        </div>

        <?php include('includes/bottom_nav.php');?>