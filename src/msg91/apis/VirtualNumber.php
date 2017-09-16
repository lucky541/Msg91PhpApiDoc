<?php

class VirtualNumber
{
    private $baseUrl;

    function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    // for Add Client
    function longCodeBalance($data)
    {
        $url = $this->baseUrl . "longcodeBalance.php";
        return ProcessData::dataProcess($url, $data);

    }
}