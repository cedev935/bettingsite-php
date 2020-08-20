<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$db = mysqli_connect('localhost', 'root', '', 'ludo_legion');  
    if(!$db) {
        die("Database connection failed") . mysqli_error($db);
    }
// following files need to be included

require_once("./config_paytm.php");
require_once("./encdec_paytm.php");
include('includes/server.php');
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		echo $_POST["STATUS"];
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		$res="INSERT into transaction(ord_id,cust_id,txn_amount) values('$paramList["ORDER_ID"]','$paramList["CUST_ID"]','$paramList["TXN_AMOUNT"]')";
		mysqli_query($db,$res);
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;

		}
		$ORDERID = $_POST["ORDER_ID"];
    	$MID = PAYTM_MERCHANT_MID;
    	//$TXNID = $_POST['TXNID'];
    	$TXNAMOUNT = $_POST["TXN_AMOUNT"];
    	//$PAYMENTMODE = $_POST['PAYMENTMODE'];
    	//$CURRENCY = $_POST['CURRENCY'];
    	//$TXNDATE = $_POST['TXNDATE'];
    	//$STATUS = $_POST['STATUS'];
    	//$RESPCODE = $_POST['RESPCODE'];
    	//$RESPMSG = $_POST['RESPMSG'];
    	//$GATEWAYNAME = $_POST['GATEWAYNAME'];
    	//$BANKTXNID = $_POST['BANKTXNID'];
    	//$BANKNAME = $_POST['BANKNAME'];
    	//$CHECKSUMHASH =$_POST['CHECKSUMHASH'];

    	/*$query = "INSERT into transaction (ORDERID,MID,TXNID,TXNAMOUNT,PAYMENTMODE,CURRENCY,TXNDATE,STATUS,RESPCODE,RESPMSG,GATEWAYNAME,BANKTXNID,BANKNAME,CHECKSUMHASH) 
    VALUES ('$ORDERID','$MID','$TXNID','$TXNAMOUNT','$PAYMENTMODE','$CURRENCY','$TXNDATE','$STATUS','$RESPCODE','$RESPMSG','$GATEWAYNAME','$BANKTXNID','$BANKNAME','$CHECKSUMHASH')";*/
    $query="INSERT INTO transaction1(ORDERID,TXNAMOUNT,MID) VALUES('$ORDERID','$TXNAMOUNT','$MID')";
    $result = mysqli_query($db, $query);
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>