<?php
class BankAccount
{
    // Class properties (attributes)
    private $accountNumber;
    private $balance;

    // Constructor method
    public function __construct($accountNumber, $initialBalance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Class methods (behaviors)

    // Method to deposit funds into the account
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    // Method to withdraw funds from the account
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdraw successful.<br>";
        } else {
            echo "Insufficient Balance.<br>";
        }
    }

    // Method to get the current balance
    public function getBalance()
    {
        return $this->balance;
    }

    // Method to get the account number
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
}

// Create a new BankAccount instance
$account = new BankAccount("123456789", 1000);

// Deposit funds
$account->deposit(500);

// Withdraw funds
$account->withdraw(200);

// Get the current balance
$balance = $account->getBalance();

// Get the account number
$accountNumber = $account->getAccountNumber();

// Output the account details
echo "Account Number: " . $accountNumber . "<br>\n";
echo "Current Balance: " . $balance . "<br>\n";
?>