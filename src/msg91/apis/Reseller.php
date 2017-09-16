<?php
require_once('ProcessData.php');

class Reseller
{
    public $baseUrl;

    function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    // for Add Client
    function addClient($data)
    {
        $url = $this->baseUrl . "add_client.php";
        return ProcessData::dataProcess($url, $data);

    }

// for List Client
    function listClient($data)
    {
        $url = $this->baseUrl . "client_list.php";
        return ProcessData::dataProcess($url, $data);
    }

// for Update Client Balance
    function updateClientsBalance($data)
    {
        $url = $this->baseUrl . "transfer_credit.php";
        return ProcessData::dataProcess($url, $data);
    }

// for managing the clients
    function manageClients($data)
    {

        $url = $this->baseUrl . "manage_client.php";
        return ProcessData::dataProcess($url, $data);

    }

// for forget Password
    function forgetPassword($data)
    {

        $url = $this->baseUrl . "api_forgetpassword.php";
        return ProcessData::dataProcess($url, $data);

    }

// for Viewing Own Profile
    function getOwnProfile($data)
    {
        $url = $this->baseUrl . "profile.php";
        return ProcessData::dataProcess($url, $data);
    }

    function getClientProfile($data)
    {
        $url = $this->baseUrl . "client_profile.php";
        return ProcessData::dataProcess($url, $data);
    }

    function getAccountExpiryDae($data)
    {
        $url = $this->baseUrl . "getexpiry.php";
        return ProcessData::dataProcess($url, $data);
    }

    function changeClientPassword($data)
    {
        $url = $this->baseUrl . "ChangePassByReseller.php";
        return ProcessData::dataProcess($url, $data);
    }

    function getCreditHistory($data)
    {
        $url = $this->baseUrl . "credit_history.php";
        return ProcessData::dataProcess($url, $data);
    }

}
