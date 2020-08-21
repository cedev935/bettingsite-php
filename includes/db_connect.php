<?php
   $db = mysqli_connect('localhost', 'root', '', 'ludo_legion1');  
    if(!$db) {
        die("Database connection failed") . mysqli_error($db);
    }
?>