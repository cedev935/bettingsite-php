<?php 
	include('../includes/db_connect.php');
	

	$wphone_no=$_POST['postphone'];
	$amount=$_POST['postamount'];
	$lphone_no=$_POST['postphone1'];
	
	//caluculate 10% from amount
	$remove=floor($amount*0.1);
	//remove 10 % from final amount
	$amount=$amount-$remove;

	$reject1 = "UPDATE chips set chips=chips+$amount WHERE user='$wphone_no'";
	mysqli_query($db, $reject1);
	
    $reject = "DELETE FROM history WHERE looser='$lphone_no'";
    mysqli_query($db, $reject);
   	
    
?>
