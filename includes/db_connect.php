<?php
   $db = mysqli_connect('localhost', 'ludosociety', 'Team@321', 'ludo_legion');  
    if(!$db) {
        die("Database connection failed") . mysqli_error($db);
    }
?>