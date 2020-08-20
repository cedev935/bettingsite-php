<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<?php include('includes/server.php');?>


<!--for auto refresh tables without reload page-->


<script>
    $(document).ready(function() {
        setInterval(function() {
            $("#open_tab_auto").load("open_table.php");
            refresh();
        }, 1000);
    });
</script>


<script>
    $(document).ready(function() {
        setInterval(function() {
            $("#run_tab_auto").load("running_table.php");
            refresh();
        }, 1000);
    });
</script>

<script>
    $(document).ready(function() {
        setInterval(function() {
            $("#room").load("room_auto.php");
            refresh();
        }, 30000);
    });
</script>



<script type="text/javascript">
        function post(phone) {
            var Row = document.getElementById(phone);
            var Cells = Row.getElementsByTagName("td");
            var player2 = (Cells[0].innerText);
            var betAmount = (Cells[1].innerText);
            var phone_no = (Cells[3].innerText);   
            var ludo_id = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            var charactersLength = characters.length;
            for ( var i = 0; i < 6; i++ ) {
                  ludo_id += characters.charAt(Math.floor(Math.random() * charactersLength));
                  }
            $.post('home_ajax.php',{postplayer: player2, postphone: phone_no, postid:ludo_id, postamount:betAmount},
                function(data)
                   {
                    
                        alert("Go play ludo and come back with this id="+ludo_id)
                        location.replace('room.php')
                    
                   });
        }
    </script>
    





<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>

<!--Script to avoid form resubmission-->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

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


<br>
<br>
<br>
<div class="container">
    <h6><img style="width:10px;height:10px;" src="https://img.icons8.com/emoji/48/000000/green-circle-emoji.png" /> <?php echo $_SESSION['user_name'];?></h6>
</div>

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

    <br>
    
    <div id="room">
<!--        Room Code Here-->
    </div>
    

    <div>
        <form method="post" action="home.php">
            <div class="input-group input-group-sm">
                <input type="number" placeholder="Enter Match Amount Here" name="amount" class="form-control">
                <span class="input-group-btn">
                    <button name="set" type="submit" class="btn btn-success btn-sm">Set
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



      


    <!--    JQERY CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




    <div id="open_tab_auto">
<!--            OPEN MATCHES TABLE HERE-->
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

    <div id="run_tab_auto">
<!--       RUNNING MATCHES TABLE HERE-->
        
    </div>
    <br>


    <?php include('includes/bottom_nav.php');?>
