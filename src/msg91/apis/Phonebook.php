<?php
require_once('ProcessData.php');

/**
 *
 */
class Phonebook
{
    private $baseUrl;

    function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    function addGroup($data)
    {
        $url = $this->baseUrl . "add_group.php";
        return ProcessData::dataProcess($url, $data);
    }


    function deleteGroup($data)
    {
        $url = $this->baseUrl . "delete_group.php";
        return ProcessData::dataProcess($url, $data);
    }

    function listGroup($data)
    {
        $url = $this->baseUrl . "list_group.php";
        return ProcessData::dataProcess($url, $data);
    }


    function addContact($data)
    {
        $url = $this->baseUrl . "add_contact.php";
        return ProcessData::dataProcess($url, $data);
    }

    function editContact($data)
    {
        $url = $this->baseUrl . "edit_contact.php";
        return ProcessData::dataProcess($url, $data);
    }

    function deleteContact($data)
    {
        $url = $this->baseUrl . "delete_contact.php";
        return ProcessData::dataProcess($url, $data);
    }

    function listContact($data)
    {
        $url = $this->baseUrl . "list_contact.php";
        return ProcessData::dataProcess($url, $data);
    }

} 