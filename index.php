<?php
$fh = fopen('click.txt','a');
fwrite($fh, $_SERVER['REMOTE_ADDR'].' '.date('c')."\n");
fclose($fh);


header("Location: index.html");

?>