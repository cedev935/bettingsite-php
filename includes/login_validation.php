<?php
	if(!empty($_SESSION['userLogin'])=='true'){
		die("You must login first, Go to http://localhost/online_outpass_portal/login.php to login");
	    //header("Location:sample_login.php");
	}
?>
