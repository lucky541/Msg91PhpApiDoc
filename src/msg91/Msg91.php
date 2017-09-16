<?php
require_once('Config.php');
require_once('apis/OTP.php');
require_once('apis/TextSMS.php');
require_once('apis/Phonebook.php');
require_once('apis/Reseller.php');
require_once('apis/VirtualNumber.php');

class Msg91
{
    private $authKey, $otp, $textSMS, $reseller, $phonebook, $virtualNumber;


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

    /********************************************** FOR OTP API'S **********************************************/

    /**
     * This is for sending OTP messages.
     */
    public function sendOTP($data)
    {
        return $this->otp->sendOTP($data);
    }

    /**
     * This is for resending OTP message.
     */
    public function resendOTP($data)
    {
        return $this->otp->resendOTP($data);
    }

    /**
     * This is for verifying OTP message.
     */
    public function verifyOTP($data)
    {
        return $this->otp->verifyOTP($data);
    }

    /********************************************** FOR TEXT SMS API'S **********************************************/

    /**
     * This is for sending text message.
     */
    public function sendSMS($data)
    {
        return $this->textSMS->sendTextSMS($data);
    }

    /********************************************** FOR VIRTUAL NUMBERS API'S **********************************************/

    /**
     * This is for getting load code balance.
     */
    function longCodeBalance($data)
    {
        return $this->virtualNumber->longCodeBalance($data);
    }

    /********************************************** FOR Phonebook API'S **********************************************/

    /**
     * This is for creating Group.
     */
    public function addGroup($data)
    {
        return $this->phonebook->addGroup($data);
    }

    /**
     * This is for deleting Group.
     */
    function deleteGroup($data)
    {
        return $this->phonebook->deleteGroup($data);
    }

    /**
     * This is for listing Group.
     */
    function listGroup($data)
    {
        return $this->phonebook->listGroup($data);
    }

    /**
     * This is for adding contacts to Group.
     */
    function addContact($data)
    {
        return $this->phonebook->addContact($data);
    }

    /**
     * This is for editing contacts of Group.
     */
    function editContact($data)
    {
        return $this->phonebook->editContact($data);
    }

    /**
     * This is for deleting contacts from Group.
     */
    function deleteContact($data)
    {
        return $this->phonebook->deleteContact($data);
    }

    /**
     * This is for listing contacts of Group.
     */
    function listContact($data)
    {
        return $this->phonebook->listContact($data);
    }


    /********************************************** FOR RESELLER'S API'S **********************************************/

    /**
     * This is for adding client.
     */
    function addClient($data)
    {
        return $this->reseller->addClient($data);
    }

    /**
     * This is for listing client.
     */
    function listClient($data)
    {
        return $this->reseller->listClient($data);
    }

    /**
     * This is for Updating Client Balance
     */
    function updateClientsBalance($data)
    {
        return $this->reseller->updateClientsBalance($data);
    }

    /**
     * This is for managing the clients
     */
    function manageClients($data)
    {
        return $this->reseller->manageClients($data);
    }

    /**
     * This is for forget Password
     */
    function forgetPassword($data)
    {
        return $this->reseller->forgetPassword($data);
    }

    /**
     * This is for getting Own Profile
     */
    function getOwnProfile($data)
    {
        return $this->reseller->getOwnProfile($data);
    }

    /**
     * This is for getting client profile
     */
    function getClientProfile($data)
    {
        return $this->reseller->getClientProfile($data);
    }

    /**
     * This is  for getting account expiry
     */
    function getAccountExpiryDae($data)
    {
        return $this->reseller->getAccountExpiryDae($data);
    }

    /**
     * This is for reseller to change client's password
     */
    function changeClientPassword($data)
    {
        return $this->reseller->changeClientPassword($data);
    }

    /**
     * This is for getting creaditHistory
     */
    function getCreditHistory($data)
    {
        return $this->reseller->getCreditHistory($data);
    }

}