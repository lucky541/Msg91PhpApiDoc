<?php
require_once('Config.php');
require_once('apis/OTP.php');
require_once('apis/TextSMS.php');
require_once('apis/Phonebook.php');
require_once('apis/Reseller.php');
require_once('apis/VirtualNumber.php');
class Msg91
{
    private $authKey, $otp, $textSMS, $reseller, $phonebook,$virtualNumber;


    // initialize the authkey at the time of object creation
    function __construct($authKey)
    {
        $this->authKey = $authKey; // user's authkey

        $this->otp = new OTP(BASE_URL);                  // object for otp services
        $this->textSMS = new TextSMS(BASE_URL);         // object for otp services
        $this->phonebook = new Phonebook(BASE_URL);    // object for phonebook services
        $this->reseller = new Reseller(BASE_URL);     // object for reseller services
        $this->virtualNumber = new VirtualNumber(BASE_URL);     // object for virtual number services
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


    /*** FOR RESELLER'S APIS ***/
    // for Add Client
    function addClient($data)
    {
        return $this->reseller->addClient($data);
    }

    // for List Client
    function listClient($data)
    {
        return $this->reseller->listClient($data);
    }

    // for Update Client Balance
    function updateClientsBalance($data)
    {
        return $this->reseller->updateClientsBalance($data);
    }

    // for managing the clients
    function manageClients($data)
    {
        return $this->reseller->manageClients($data);
    }

    // for forget Password
    function forgetPassword($data)
    {
        return $this->reseller->forgetPassword($data);
    }

    // for geting Own Profile
    function getOwnProfile($data)
    {
        return $this->reseller->getOwnProfile($data);
    }

    // FOR geting CLIENT PROFILE
    function getClientProfile($data)
    {
        return $this->reseller->getClientProfile($data);
    }

    // for geting account expiry
    function getAccountExpiryDae($data)
    {
        return $this->reseller->getAccountExpiryDae($data);
    }

    // for reseller to change password
    function changeClientPassword($data)
    {
        return $this->reseller->changeClientPassword($data);
    }

    // get creaditHistory
    function getCreditHistory($data)
    {
        return $this->reseller->getCreditHistory($data);
    }

    /*** FOR VIRTUAL NUMBERS API ***/
    function longCodeBalance($data)
    {
        return $this->virtualNumber->longCodeBalance($data);
    }

}