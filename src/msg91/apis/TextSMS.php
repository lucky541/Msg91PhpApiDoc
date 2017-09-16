<?php
require_once('ProcessData.php');

/**
* 
*/
class TextSMS
{
	
	  function __construct($authKey,$baseUrl){
          $this->authKey = $authKey;
          $this->baseUrl = $baseUrl;
  } 
 // for Add Client
 function sendTextSMS($data){
 	      $url=$this->baseUrl."sendhttp.php";
      return ProcessData::dataProcess($url,$data);

   } 
}