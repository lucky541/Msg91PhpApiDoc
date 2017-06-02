<?php
require_once('Config.php');

onCreateMethod();

 function onCreateMethod(){
     
      // creating an object of msg91
 	$msg91 = new Msg91(AUTH_KEY,BASE_URL);
   
    // TO SEND OTP
    //   SEND_OPT($msg91);

     // TO reSEND OTP
      //reSEND_OPT($msg91);
       
     // TO VERIFY OTP
       VERIFY_OPT($msg91);         
 }

 function SEND_OPT($msg91){
	$mobile = "919999999999"; //Keep number in international format (with country code)
	$message = "Your verification code is ##OTP##."; // Message content to send. (default : Your verification code is ##OTP##.)
	$sender = "";   //Receiver will see this as sender's ID. (default : OTPSMS)
	$otp = 2786;  //OTP to send and verify. If not sent, OTP will be generated.

	$data = array( "authkey" => AUTH_KEY,
		            "mobile" => $mobile,
		            "message" => $message,
		            "sender" => $sender,
		           // "otp" => $otp,
	              );

	//Return the client ID on successful registration
	$output = $msg91->otp->sendOTP($data);

	print_r($output);
 }

 function reSEND_OPT($msg91){
	$mobile = "919999999999"; //Keep number in international format (with country code)
	$retrytype =" voice";  //Method to retry otp : voice or text. Default is voice.

	$data = array(  "authkey" => AUTH_KEY,
		            "mobile" => $mobile,
		            "retrytype" => $retrytype,
	              );

	//Return the client ID on successful registration
	$output = $msg91->otp->resendOTP($data);

	print_r($output);
 }

 function VERIFY_OPT($msg91){
   $mobile = "919999999999"; //Keep number in international format (with country code)
   $otp = "your otp";  //OTP to verify
   $msg91 = new Msg91($authkey);
 
	$data = array(  "authkey" => AUTH_KEY,
		            "mobile" => $mobile,
		            "otp" => $otp,
	              );

	//Return the client ID on successful registration
	$output = $msg91->otp->verifyOTP($data);

	print_r($output);
 }