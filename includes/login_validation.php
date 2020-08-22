<?php
	if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
	    //header("Location: login.php");
	    die("You must login first, Go to http://www.ludosociety.com to login");
	}
?>
