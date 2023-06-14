<?php

interface HasLockerBox {
    public function numOfLockerBox();
}


 abstract class BankAccount {
    protected $amount;

    protected $interestRate;

public  function __construct($openingBalance){
    $this -> amount = $openingBalance;

}

     public function withdraw($withDrawAmount){
        if($withDrawAmount > $this ->amount){
            echo "insufficient balanace <br>";
            return;
        }

        $this -> amount = $this -> amount - $withDrawAmount;
    echo "withdraw account $withDrawAmount <br>";
   }

   public function deposit($depositAmount){
    $this -> amount =$depositAmount;
   }

    public function numOfLockerBox(){


   }

   public function checkBalance(){
    echo "your balance amount is : " .$this -> amount ."<br>";
   }

   public function calculateInterest ($year){
    echo "this interest :".($this -> amount * $year * $this -> interestRate)/100;
}

}


class FixedDepositAccount extends BankAccount implements HasLockerBox{

    protected $interestRate = 12;
public function withdraw($withDrawAmount)
{
    echo "total interest :"."cannot withdraw in fixed account<br>";
    return;
}   
}

class SavingAccount extends BankAccount implements HasLockerBox{

    protected $interestRate = 6;

    public function withdraw($withDrawAmount)
    {
    if($withDrawAmount > 100000){
        echo "canot withdraw more than 1 lakh <br>";
        return;
    }
    parent::withdraw($withDrawAmount);
}
public function numOfLockerBox()
{
    return 4;
}

}



// $JohnBankAccount = new BankAccount();
// $JohnBankAccount -> withdraw(2000);

// $BenBankAccount = new BankAccount(100000);
// $BenBankAccount -> deposit(20000);
// $BenBankAccount -> withdraw(30000);


// $BenBankAccount = new SavingAccount(100000);
 $BenBankAccount =new FixedDepositAccount(100000);
 $BenBankAccount =new BankAccount(100000);

$BenBankAccount -> checkBalance();
// $BenBankAccount -> withdraw(200000);
$BenBankAccount ->calculateInterest(2);
?>