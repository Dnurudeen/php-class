<?php
namespace BankRecord;

interface RegFunctions{
    public static function BankOne();
    public static function BankTwo();
    public static function BankThree();
}

trait Pay{
    public static function BankOne(){
        echo "Bank name: Foam Dex Bank <br> Account No.: 8778765643 <br> Account name: Jamal Adeniyi";
    }

    public static function BankTwo(){
        echo "Bank name: GMX Globox Bank <br> Account No.: 8778765643 <br> Account name: Jamal O. Adeniyi";
    }

    public static function BankThree(){
        echo "Bank name: Piggy Allen Bank <br> Account No.: 8778765643 <br> Account name: Jamal Adeniyi O.";
    }
}

class PaymentDesc implements RegFunctions{
    use Pay;
}
