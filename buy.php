<form onsubmit="return false;" class="form-horizontal ng-pristine ng-valid ng-scope ng-valid-min" ng-if="!gateway">
    <div class="box-body">
        <!-- Button Drop Down -->
        <div class="form-group" ng-show="display.sendHere" style="margin-bottom: 0;">
            <img src="/resources/paytm.png" style="padding: 10px 5px 0px 5px; width:100%">
            <hr style="margin: 3px 0px;">
            <div class="col-sm-10">
                <span class="help-block text-center">
                    For <strong>automated transfer</strong> of chips into your account. Send money to below
                    <strong>UPI ID</strong>
                </span>
            </div>
            <hr style="margin: 3px 0px;">
            <label for="mobile" class="col-sm-2 control-label">Send Money on This Paytm No</label>
            <div class="col-sm-10">
                <div class="input-group" style="z-index:0; font-weight: 500;">
                    <input style="letter-spacing:2px;" type="text" readonly="yes" class="form-control input-lg ng-pristine ng-untouched ng-valid" ng-model="selectedMobile" ng-click="copy()" id="active_mobile">
                    <div class="input-group-btn">
                        <a class="btn btn-lg btn-primary ng-binding" ng-click="copy()">Copy</a>
                    </div>
                </div>
                <p>
                </p>
                <li>Minimum Deposit: <strong>50 Chips</strong></li>
                <li class="text-warning">Mobile No changes regularly, Always check before sending money.</li>
                <li class="text-danger">Don't use Google Pay, Phone Pe, Etc.</li>
                <li class="text-danger">Pay using Paytm only.</li>
                <li class="text-success">Money will be credited on account immediately</li>
                <p></p>
            </div>
        </div>
        <div class="form-group ng-hide" ng-show="display.enterMobile" style="margin-bottom: 0;">
            <img src="/assets/images/paytm.png" style="margin-left:20%; padding: 10px 0px 0px 0px; width:60%">
            <hr style="margin: 3px 0px;">
            <div class="col-sm-10">
                <span class="help-block text-center">
                    Enter the mobile number on which you sent money.
                </span>
            </div>
            <hr style="margin: 3px 0px;">
            <label for="mobile" class="col-sm-2 control-label">Enter Mobile No.</label>
            <div class="col-sm-10">
                <div style="z-index: 0; font-weight: bold;">
                    <input type="text" class="form-control input-lg ng-pristine ng-untouched ng-valid" ng-model="selectedMobile" id="mobile" autocomplete="off">
                </div>
                <p>
                </p>
                <li>Minimum Deposit: <strong>50 Chips</strong></li>
                <li><span class="text-danger">Dont Save this no!</span>, Numbers change regularly</li>
                <li class="text-danger">Don't use Google Pay, Phone Pe, Etc.</li>
                <li class="text-danger">Pay using Paytm only.</li>
                <p></p>
            </div>
        </div>
        <div class="form-group ng-hide" ng-show="display.transactionId" style="margin-bottom: 0;">
            <img src="/assets/lb.png" style="margin-left:35%; padding: 10px 0px 0px 0px; width:30%">
            <hr style="margin: 3px 0px;">
            <div class="col-sm-10">
                <span class="help-block text-center">
                    Enter Transaction ID of payment below.
                </span>
            </div>
            <hr style="margin: 3px 0px;">
            <label for="transactionId" class="col-sm-2 control-label">Transaction ID</label>
            <div class="col-sm-10">
                <input style="letter-spacing:1px;" tabindex="2" ng-model="txnId" type="number" class="form-control input-lg ng-pristine ng-untouched ng-valid" id="transactionId" placeholder="Txn ID" autocomplete="off">
                <span class="help-block text-center">Can't find transaction ID ? <a data-toggle="modal" data-target="#walletIdModal" href="javascript:;" class="">Click
                        Here</a> </span>
            </div>
        </div>
        <div class="form-group ng-hide" ng-show="display.transactionId" style="margin-bottom: 0;">
            <label for="amount" class="col-sm-2 control-label">Amount</label>
            <div class="col-sm-10">
                <input style="letter-spacing: 5px;" tabindex="3" ng-model="amount" type="number" min="1" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min" id="amount" placeholder="..." autocomplete="off">
                <span class="help-block text-center">1 Chip = 1 Rs</span>
            </div>
        </div>
    </div>

    <div class="box-footer">
        <!-- ngIf: display.moneySentBtn --><button ng-if="display.moneySentBtn" ng-click="nextStep('sent')" class="btn btn-success pull-right ng-scope">Money
            Sent <i class="glyphicon glyphicon-chevron-right"></i></button><!-- end ngIf: display.moneySentBtn -->
        <!-- ngIf: display.moneyReqBtn -->
        <!-- ngIf: display.checkBtn -->
        <a class="btn btn-default" target="_blank" href="https://m.me/104973171255876"><i class="fa fa-question-circle"></i> Contact Support</a>
    </div>
</form>