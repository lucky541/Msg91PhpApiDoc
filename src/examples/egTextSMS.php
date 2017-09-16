<?php
require_once('Config.php');

onCreateMethod();

 function onCreateMethod(){
    
   // creating an object of msg91
 	$msg91 = new Msg91(AUTH_KEY,BASE_URL);
   
     SEND_SMS($msg91);
     
  }

  function SEND_SMS($msg91){
    
 //(integer)	Keep numbers in international format (with country code), multiple numbers should be separated by comma (,)
$mobiles = "919999999999";

//(varchar)	Message content to send
$message = " your text sms will come up here";

//(varchar)	Receiver will see this as sender's ID.
$sender = "my sender id";

//(varchar)	If your operator supports multiple routes then give one route name. Eg: route=1 for promotional, route=4 for transactional SMS.
$route = "1";

//numeric	0 for international,1 for USA, 91 for India.
$country = "91";

// optional parameters //
$flash = "1"; //flash=1 (for flash SMS)
$unicode = ""; //unicode=1 (for unicode SMS)
//$schtime= "";  //When you want to schedule the SMS to be sent.
$afterminutes = ""; //Time in minutes after which you want to send sms.
$response = "";     //for example: &response=json or &response=xml
$campaign = "";   //Campaign name you wish to create.

$data = array( "authkey" => AUTH_KEY,
                "mobiles" => $mobiles,
                "message" => $message,
                "sender" => $sender,
                "route" => $route,
                "country" => $country,
                
                "flash" => $flash,
                "unicode" => $unicode,
          //      "schtime" => $schtime,
                "afterminutes" => $afterminutes,
                "response" => $response,
                "campaign" => $campaign,
                );

//Return the client ID on successful registration
$output = $msg91->textSMS->sendTextSMS($data);

return $output;

  }