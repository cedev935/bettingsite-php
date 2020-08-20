<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

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
		
		$conn = new mysqli('localhost', 'root', '', 'ludo_legion');
		//Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);}
		$amount=$_POST['TXNAMOUNT'];
		$phone_no=$_SESSION['phone_no'];
		$sql="UPDATE chips set chips=chips+$amount where user='$phone_no'";
		mysqli_query($conn,$sql);
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
        
        // Create connection
        $conn = new mysqli('localhost', 'root', '', 'ludo_legion');
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO transaction (ORDERID,MID,TXNID,TXNAMOUNT,PAYMENTMODE,CURRENCY,TXNDATE,STATUS,RESPCODE,RESPMSG,GATEWAYNAME,BANKTXNID,BANKNAME,CHECKSUMHASH)
        VALUES ('".$_POST['ORDERID']."','".$_POST['MID']."', '".$_POST['TXNID']."','".$_POST['TXNAMOUNT']."','".$_POST['PAYMENTMODE']."','".$_POST['CURRENCY']."','".$_POST['TXNDATE']."','".$_POST['STATUS']."','".$_POST['RESPCODE']."','".$_POST['RESPMSG']."','".$_POST['GATEWAYNAME']."','".$_POST['BANKTXNID']."','".$_POST['BANKNAME']."','".$_POST['CHECKSUMHASH']."')";        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }



        $conn->close();
	    
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
