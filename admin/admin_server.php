<?php 
	include('../includes/db_connect.php');
	

	$phone_no=$_POST['postphone'];
	$amount=$_POST['postamount'];
	
	$reject1 = "UPDATE chips set chips=chips-$amount WHERE user='$phone_no'";
	mysqli_query($db, $reject1);
	
	$reject = "DELETE FROM withdraw_req WHERE phone_no='$phone_no'";
    mysqli_query($db, $reject);
    
    
?>