<?php 
namespace model\amount;

class jpy {

    public const TENTH = 10000;
    public const FTH = 5000;
    public const TH = 1000;
    public const FHUND = 500;
    public const HUND = 100;
    public const FTEN = 50;
    public const TEN = 10;
    public const FIVE = 5;
    public const ONE = 1;

    private $moneyType = array();

    private $totalAmout;
    function __construct($totalAmout) {
        $this -> setAmount($totalAmout);
        $this -> moneyType[10000] = 0;
        $this -> moneyType[5000] = 0;
        $this -> moneyType[1000] = 0;
        $this -> moneyType[500] = 0;
        $this -> moneyType[100] = 0;
        $this -> moneyType[50] = 0;
        $this -> moneyType[10] = 0;
        $this -> moneyType[5] = 0;
        $this -> moneyType[1] = 0;
    }

    public function setAmount($number) {
        $this->totalAmout = $number;
    }
    public function getAmount() {
        return $this->totalAmout;
    }

    public function calcBills() {
        $amount = $this->totalAmout;
        $arr = $this->moneyType;

        foreach ($arr as $i => $val) {
            $c = 0;
            $tempAmount = 0;
            $c = $amount % $i;
            $tempAmount = $amount - $c;
            $arr[$i] = $tempAmount/$i;

            $amount = $amount - ($arr[$i] * $i);
        }
        return $arr;
    }

}

?>