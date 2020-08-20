<?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");

?>
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

<form method="post" action="pgRedirect.php">
        <table border="1" class=" m-5 ">
            <tbody>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER_ID::*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                        name="ORDER_ID" autocomplete="off"
                        value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label>CUSTID ::*</label></td>
                    <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                    <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label>Channel ::*</label></td>
                    <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
                        size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label>txnAmount*</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10"
                        type="text" name="TXN_AMOUNT"
                        value="1">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input value="CheckOut" type="submit"   onclick=""></td>
                </tr>
            </tbody>
        </table>
    </form>
<hr>
<br>
<br>
<br>

<?php include('includes/bottom_nav.php');?>
