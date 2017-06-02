<?php
require_once('Reseller.php');
require_once('Phonebook.php');
require_once('TextSMS.php');
require_once('OTP.php');
class Msg91 {
	public $authKey,$textSMS,$otp,$reseller,$phonebook,$baseUrl;
	    
	    
	    // initialize the authkey at the time of object creation
	    function __construct($authKey,$baseUrl){
                 $this->authKey = $authKey;
                 $this->baseUrl= $baseUrl; // url for the msg91's apis
                 
                 $this->reseller = new Reseller($this->authKey,$this->baseUrl);
                 $this->phonebook = new Phonebook($this->authKey,$this->baseUrl);
                 $this->textSMS = new TextSMS($this->authKey,$this->baseUrl);
                 $this->otp = new OTP($this->authKey,$this->baseUrl);

         	}
       
}