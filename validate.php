<?php

$name=$_POST['postname'];
$age=$_POST['postage'];

if($age >= 18){
    echo "1";
}
else{
    echo "0";
}

?>