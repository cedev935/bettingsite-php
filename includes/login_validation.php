<?php
	if(!empty($_SESSION['userLogin'])=='true'){
		die("You must login first, Go to http://www.ludosociety.com/login.php to login");
	    //header("Location:sample_login.php");
	}
?>
