<?php

//parent class / super class
class Mobile
{

    public $connection = "GSM";
    public $font = "Lusida console";
    protected $durabilty = 50;

    function __construct()
    {
        echo "<br><hr>";
    }


    function sendSMS()
    {
        echo "Mobile can send SMS. Sms font is " . $this->font . " and send via :" . $this->connection;
    }

    function call()
    {
        echo " Mobile can get calls.";
    }

    protected function javaGames()
    {
        echo "Mobile can play java games. durability is ".$this->durabilty;
    }
}

//child class / sub class
class SmartMobile extends Mobile
{

    function sendSMS()
    {
        $this->connection = "4G";
        echo "Smart Mobile can send SMS. Sms font is " . $this->font . " and send via :" . $this->connection;
    }

    function exploreInternet()
    {
        echo " Mobile can explore internet.";
    }

    function playGames()
    {
//        $this->durabilty = $this->durabilty - 25;
        $this->durabilty -= 25;
        $this->javaGames();
    }
}


$mobile = new Mobile();
$mobile->call();
$mobile->sendSMS();


$smartMobile = new SmartMobile();
$smartMobile->call();
$smartMobile->sendSMS();
$smartMobile->exploreInternet();
$smartMobile->playGames();

