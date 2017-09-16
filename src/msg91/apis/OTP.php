<?php
require_once('ProcessData.php');

/**
* 
*/
class OTP
{
  public $authkey,$baseUrl;	
	
 function __construct($authKey,$baseUrl){
          $this->authKey = $authKey;
          $this->baseUrl = $baseUrl;
   } 

  function sendOTP($data){
 	      $url=$this->baseUrl."sendotp.php";
      return ProcessData::dataProcess($url,$data);
   }  

   function verifyOTP($data){
        $url=$this->baseUrl."verifyRequestOTP.php";
      return ProcessData::dataProcess($url,$data);
   } 

   function resendOTP($data){
        $url=$this->baseUrl."retryotp.php";
      return ProcessData::dataProcess($url,$data);
   } 

}
