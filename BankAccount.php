<?php 
    require_once 'Account.php';
    class BankAccount extends Account {
        // tambahkan data baru customer
        public $customer;

        function __construct($no,$saldo_awal,$cust){
            // panggil constructor parent class
            parent::__construct($no,$saldo_awal);
            $this->customer = $cust;
        }

        // tulis ulang method cetak
        function cetak(){
            parent::cetak();
            echo'<br> Customer : '.$this->customer;
            echo '<br> Saldo : ' . $this->getSaldo();
        }

        function transfer($obj_Account,$uang){
            $obj_Account->deposit($uang);
            $this->withdrawl($uang);
        }
    }
?>