<?php
session_start();
$email = $_SESSION['email'];

include('smtp/PHPMailerAutoload.php');
$code=rand(111111,999999);
$html='Your Verification Code is: '.$code;

echo smtp_mailer($email,'Your Verification Code',$html);

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "mhasan191225@bscse.uiu.ac.bd";
	$mail->Password = "fvfqkbipntndtheq"; 
	$mail->SetFrom("mhasan191225@bscse.uiu.ac.bd");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
    $_SESSION["code"] = $code;
    header("Location:/CSA/verify-user.php");
    exit();
?>