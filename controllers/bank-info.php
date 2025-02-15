<?php
include_once 'payment-desc.php';
use BankRecord\PaymentDesc as BankInfo;

class DisplayBankInfo{
    function __construct()
    {
        echo "<h1>ALL BANK OPTIONS</h1>";
    }
    public function Bank1(){
        echo '<b>Bank One:</b> <br>';
    }
    public function Bank2(){
        echo '<b>Bank Two:</b> <br>';
    }
    public function Bank3(){
        echo '<b>Bank Three:</b> <br>';
    }
}

$bank1 = new DisplayBankInfo;
// Bank One
$bank1->Bank1();
BankInfo::BankOne();

echo '<br><br>';

// Bank Two
$bank1->Bank2();
BankInfo::BankTwo();

echo '<br><br>';

// Bank Three
$bank1->Bank3();
BankInfo::BankThree();