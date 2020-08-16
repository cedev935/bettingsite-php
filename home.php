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

<div ui-view="" style="padding-bottom: 75px; background: none;" class="ng-scope">
   
   <div class="row">
      <div class="col-6">
          <h2>Play Ludo</h2>
      </div>
      <div class="col-6 text-right">
          <button ui-sref="app.howtoplay" class="pull-right btn btn-danger btn-sm" href="#/app/howtoplay"><i class="glyphicon glyphicon-expand"></i>
                How to play?</button>
      </div>
       
   </div>
    
    <section class="content ng-scope" style="padding-top: 0px;">
        <div class="row">
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <form method="post" onsubmit="return false;" class="ng-pristine ng-valid ng-valid-min">
                            <div class="input-group input-group-sm">
                                <input min="50" step="50" style="z-index:0;" ng-model="amount" type="number" placeholder="Enter Match Amount Here" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min">
                                <span class="input-group-btn">
                                    <button style="z-index:0;" ng-disabled="setBtn" ng-click="setMatch()" type="submit" class="btn btn-success btn-flat ng-binding">Set
                                        Game</button>
                                </span>
                            </div>
                            <!-- <span class="help-block">Set Game here. Turn up the volume for notification.</span> -->
                        </form>
                    </div>
                    <div class="box-header with-border" style="background: #f5f5f5">
                        <h3 class="box-title">Open Matches</h3>
                        <button ng-click="openChat()" class="pull-right btn btn-xs btn-primary">Chat with us</button>
                    </div>
                    <div class="box-body">
                        <!-- ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <div ng-if="game.status == 'placed' || game.status == 'request'" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Priyanka
                            </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"> 550</span>
                                <!-- ngRepeat: b in game.btn --><button class="btn btn-primary btn-xs" ng-click="exeute_request(b.action, game.mid)" ng-repeat="b in game.btn">play</button><!-- end ngRepeat: b in game.btn -->
                            </span>
                        </div><!-- end ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <div ng-if="game.status == 'placed' || game.status == 'request'" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Vaibhav
                            </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"> 50</span>
                                <!-- ngRepeat: b in game.btn --><button class="btn btn-primary btn-xs" ng-click="exeute_request(b.action, game.mid)" ng-repeat="b in game.btn">play</button><!-- end ngRepeat: b in game.btn -->
                            </span>
                        </div><!-- end ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.status == 'placed' || game.status == 'request' -->
                        <div ng-if="game.status == 'placed' || game.status == 'request'" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Akash
                            </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"> 50</span>
                                <!-- ngRepeat: b in game.btn --><button class="btn btn-primary btn-xs" ng-click="exeute_request(b.action, game.mid)" ng-repeat="b in game.btn">play</button><!-- end ngRepeat: b in game.btn -->
                            </span>
                        </div><!-- end ngIf: game.status == 'placed' || game.status == 'request' -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                    </div>

                    <div class="box-header with-border" style="background: #f5f5f5">
                        <h3 class="box-title">Running Matches <span class="badge badge-secondary ng-binding">34</span></h3>
                        <span class="pull-right ng-binding"><i style="color: green;" class="glyphicon glyphicon-record"></i> Users Online:
                            18</span>
                    </div>
                    <div class="box-body">
                        <!-- ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->

                        <!-- ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Mahesh <span style="font-size: 16px;">🎲</span> Jitu Goyal</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Still alone <span style="font-size: 16px;">🎲</span> Deadman</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 550</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Radha <span style="font-size: 16px;">🎲</span> Akash</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Ankit Mishra <span style="font-size: 16px;">🎲</span> Sanjay Rana</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 100</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Prajakta <span style="font-size: 16px;">🎲</span> Maroti</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Mahi <span style="font-size: 16px;">🎲</span> King</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 3000</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">vijay kumar <span style="font-size: 16px;">🎲</span> Kushagra9666</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Thakur😎 302 <span style="font-size: 16px;">🎲</span> Ram Lal Meena</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 150</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Mahesh <span style="font-size: 16px;">🎲</span> Maroti</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Amit k <span style="font-size: 16px;">🎲</span> Neha</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Vikas <span style="font-size: 16px;">🎲</span> Davinder singh</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Gurpreetkaur <span style="font-size: 16px;">🎲</span> Ruchish</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">mona singh <span style="font-size: 16px;">🎲</span> Shanu0015</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Neha <span style="font-size: 16px;">🎲</span> Yuvraj</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Maroti <span style="font-size: 16px;">🎲</span> Ankesh 🇮🇳</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Chaman manan <span style="font-size: 16px;">🎲</span> Davinder singh</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Tush72 <span style="font-size: 16px;">🎲</span> </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Shanu0015 <span style="font-size: 16px;">🎲</span> Rahul</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Tush72 <span style="font-size: 16px;">🎲</span> Shubham</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">H <span style="font-size: 16px;">🎲</span> Varinder Pal</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Dev <span style="font-size: 16px;">🎲</span> </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Olaf <span style="font-size: 16px;">🎲</span> </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Kushagra9666 <span style="font-size: 16px;">🎲</span> </span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Shubham <span style="font-size: 16px;">🎲</span> Mazedemon</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Tushar <span style="font-size: 16px;">🎲</span> Kawardeep</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Uttam kar <span style="font-size: 16px;">🎲</span> Varun soni</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Ashutosh Tiwari <span style="font-size: 16px;">🎲</span> Krishnan</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Raja musky <span style="font-size: 16px;">🎲</span> Arun sharma</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Jugal22 <span style="font-size: 16px;">🎲</span> Prash</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Kush rose <span style="font-size: 16px;">🎲</span> Ms pavan</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">vishal chugh <span style="font-size: 16px;">🎲</span> Swativashist</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Inyasha <span style="font-size: 16px;">🎲</span> Fanai89</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Nitu sharma <span style="font-size: 16px;">🎲</span> Bindupriya</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <div ng-if="!game.id &amp;&amp; (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted')" ng-repeat="game in running track by game.mid" class="col-xs-12 matchbox ng-scope">
                            <span class="matchbox-user ng-binding" style="text-transform: capitalize;">Elif Denezer <span style="font-size: 16px;">🎲</span> Nitesh Ramteke</span>
                            <span class="pull-right">
                                <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="/assets/chip2.png" height="18px" alt=""> 50</span>
                                <!-- ngIf: checkHold(game) == 'view' -->
                                <!-- ngIf: checkHold(game) == 'hold' -->
                            </span>
                        </div><!-- end ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                        <!-- ngIf: !game.id && (game.status == 'ingame' || game.status == 'started'|| game.status == 'posted') -->
                        <!-- end ngRepeat: game in running track by game.mid -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('includes/bottom_nav.php');?>