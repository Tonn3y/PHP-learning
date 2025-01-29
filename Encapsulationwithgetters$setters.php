<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class BankAccount {
        private $balance;

        public function deposit($amount){
            if($amount>0) {
                $this->balance+=$amount;
            }
        }
        public function withdraw($amount) {
            if ($this->balance>=$amount) {
                $this->balance-=$amount;
                return "Withdrew $amount.Remaining balance is $this->balance";
            }
            else {
                return "Not enough balance.";
            }
        }

        public function getBalance() {
            "currentbalance: $this->balance";
        }
    }
    $account = new BankAccount();
    echo $account->deposit(1000);
    echo $account->withdraw(420);
    echo $account->getBalance();
    ?>
</body>
</html>