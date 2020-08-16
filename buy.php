<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>
<div class="container"><h4>Add Chips</h4></div>
<div class="container">
    <form >
        <!-- Button Drop Down -->
        <div class="form-group" ng-show="display.sendHere" style="margin-bottom: 0;">
            <img src="resources/paytm.png" style="padding: 10px 5px 0px 5px; width:100%">
            <hr style="margin: 3px 0px;">
            <div class="col-sm-10"><small>
                <span class="help-block text-center">
                    For <strong>automated transfer</strong> of chips into your account. Send money to below
                    <strong>UPI ID</strong>
                </span></small>
            </div>
            <hr style="margin: 3px 0px;">
            <label for="mobile" class="col-sm-2 control-label">Send Money on This Paytm No</label>
            <div class="col-sm-10">
                <div class="input-group" style="z-index:0; font-weight: 500;">
                    <input style="letter-spacing:2px;" type="text" readonly="yes" class="form-control input-lg ng-pristine ng-untouched ng-valid" ng-model="selectedMobile" ng-click="copy()" id="active_mobile">
                    <div class="input-group-btn">
                        <a class="btn btn-primary ng-binding" ng-click="copy()">Copy</a>
                    </div>
                </div>
                <p>
                </p><small>
                <li>Minimum Deposit: <strong>50 Chips</strong></li>
                <li class="text-warning">Mobile No changes regularly, Always check before sending money.</li>
                <li class="text-danger">Don't use Google Pay, Phone Pe, Etc.</li>
                <li class="text-danger">Pay using Paytm only.</li>
                <li class="text-success">Money will be credited on account immediately</li></small>
                <p></p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
               <div class="col-6">
                    <a class="btn btn-danger" target="_blank" href="https://m.me/104973171255876"><i class="fa fa-question-circle"></i> <small>Contact Support</small></a>
                </div>
                <div class="col-6 text-right">
                    <button ng-if="display.moneySentBtn" ng-click="nextStep('sent')" class="btn btn-success pull-right ng-scope">Money
                        Sent <i class="glyphicon glyphicon-chevron-right"></i></button>
                </div>
                

            </div>
        </div>
    </form>

</div>
<hr>
<br>
<br>
<br>

<?php include('includes/bottom_nav.php');?>