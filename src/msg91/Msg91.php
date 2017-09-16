<?php
require_once('Config.php');
require_once('apis/OTP.php');
require_once('apis/TextSMS.php');

class Msg91
{
    private $authKey, $otp, $baseUrl, $textSMS, $reseller, $phonebook;


    // initialize the authkey at the time of object creation
    function __construct($authKey)
    {
        $this->authKey = $authKey; // user's authkey
        $this->baseUrl = BASE_URL; // url for the msg91's apis

        $this->otp = new OTP($this->authKey, $this->baseUrl); // object for otp services
        $this->textSMS = new TextSMS($this->authKey, $this->baseUrl); // object for otp services
    }

    /*** FOR OTP APIS ***/
    # TO SEND OTP
    public function sendOTP($data)
    {
        return $this->otp->sendOTP($data);
    }

    # TO RESEND OTP
    public function resendOTP($data)
    {
        return $this->otp->resendOTP($data);
    }

    # TO RESEND OTP
    public function verifyOTP($data)
    {
        return $this->otp->verifyOTP($data);
    }

   /*** FOR TEXT SMS APIS ***/
    # TO RESEND OTP
    public function sendSMS($data)
    {
        return $this->textSMS->sendTextSMS($data);
    }


}