<?php
$OTP = '0' ;
$t = substr(time(), 4);;


for($i = 0; $i<6; $i++) (
$OTP += rand(6,$t);

// Echo do resultado OTP

echo $OTP;

echo <\br>Time: ".time();
?>