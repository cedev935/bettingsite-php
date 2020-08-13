<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>

<div class="container">
    <h2>
        Sell Chips
    </h2>
</div>

<div class="container">
    <div class="row">
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-12">
            <div class="box box-info">
                <form onsubmit="return false;" class="form-horizontal ng-pristine ng-valid ng-valid-min">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="amount" class="col-sm-2 control-label">Amount</label>

                            <div class="col-sm-10">
                                <input ng-model="amount" type="number" min="1" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min" id="amount" placeholder="Withdraw Chips">
                                <span class="text-primary">Minimum Withdraw: 50Chips </span>
                            </div>
                        </div>

                        <!-- ngIf: false -->

                        <div class="form-group">
                            <!-- ngIf: data.type=='upi' -->
                            <!-- ngIf: data.type=='paytm' --><label for="mobile" ng-if="data.type=='paytm'" class="col-sm-2 control-label ng-scope">Mobile No.</label><!-- end ngIf: data.type=='paytm' -->
                            <div class="col-sm-10">
                                <!-- ngIf: data.type=='upi' -->
                                <!-- ngIf: data.type=='paytm' --><input ng-model="data.paytm" ng-if="data.type=='paytm'" type="number" class="form-control ng-pristine ng-untouched ng-valid ng-scope" placeholder="Paytm number"><!-- end ngIf: data.type=='paytm' -->
                                <span class="text-default">Withdrawal may take upto 6-48 Hours</span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                       <div class="col-sm-6">
                           <button ng-disabled="disableBtn" ng-click="withdraw()" class="btn btn-success pull-right ng-binding">Submit</button>
                       </div>
                    <div class="col-sm-6">
                        <button  class="btn btn-danger"target="_blank" href="https://t.me/ludobuddy"><i class="fa fa-question-circle"></i> Contact Support</button>
                    </div>
                        
                    </div>
                </form>
            </div>
            <br>
            <hr>
            
            <div class="container">
                <h1>
                    Pending Requests
                </h1>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>
<?php include('includes/bottom_nav.php');?>