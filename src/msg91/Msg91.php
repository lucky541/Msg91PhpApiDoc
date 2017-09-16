<?php
require_once('Config.php');
require_once('apis/OTP.php');
require_once('apis/TextSMS.php');
require_once('apis/Phonebook.php');

class Msg91
{
    private $authKey, $otp, $textSMS, $reseller, $phonebook;


    // initialize the authkey at the time of object creation
    function __construct($authKey)
    {
        $this->authKey = $authKey; // user's authkey

        $this->otp = new OTP(BASE_URL); // object for otp services
        $this->textSMS = new TextSMS(BASE_URL); // object for otp services
        $this->phonebook = new Phonebook(BASE_URL); // object for phonebook services
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

    /*** FOR TEXT Phonebook APIS ***/
    # TO RESEND OTP
        public function addGroup($data)
        {
            return $this->phonebook->addGroup($data);
        }

        function deleteGroup($data)
        {
            return $this->phonebook->deleteGroup($data);
        }

        function listGroup($data)
        {
            return $this->phonebook->listGroup($data);
        }

        function addContact($data)
        {
            return $this->phonebook->addContact($data);
        }

        function editContact($data)
        {
            return $this->phonebook->editContact($data);
        }

        function deleteContact($data)
        {
            return $this->phonebook->deleteContact($data);
        }

        function listContact($data)
        {
            return $this->phonebook->listContact($data);
        }

}