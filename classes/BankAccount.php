<?php
class BankAccount implements IfaceBankAccount
{

    private $balance = null;
    private $deposit = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //$amount + $this->balance;
        (int)(string)$this->balance = (int)(string)$amount + (int)(string)$this->balance;

    }

    public function transfer(Money $amount, BankAccount $account)
    {
        if((int)(string)$this->balance < (int)(string)$amount){
            throw new Exception('Withdrawl amount larger than balance');
        }
        else{
            (int)(string)$this->balance = (int)(string)$this->balance - (int)(string)$amount;
                  (int)(string)$account->balance = (int)(string)$amount + (int)(string)$account->balance();        
        }
                
    }
public function withdraw(Money $amount)
    {
        if((int)(string)$this->balance < (int)(string)$amount){
            throw new Exception('Withdrawl amount larger than balance');
        }
        else{
            (int)(string)$this->balance = (int)(string)$this->balance - (int)(string)$amount ;    
        }
        
    }

}