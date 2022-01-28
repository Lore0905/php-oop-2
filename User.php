<?php
    class User {
        public $name;
        public $lastname;
        public $age;
        protected $credit_card_number;
        protected $credit_card_cvv;
        protected $credit_card_date;
        protected $secret_user_data = [];
        protected $carrello = [];
        public function __construct($_name, $_lastname, $_age){
            $this->name = $_name;
            $this->lastname = $_age;
            $this->age = $_age;
        }
        public function getFullName(){
            return $this->name . ' ' . $this->lastname;
        }
        public function getAge(){
            return $this->age;
        }
        public function pushCrypto($crypto){
            $this->carrello[] = $crypto;
        }
        public function getCarrello(){
            return $this->carrello;
        }
        public function pushSecretDataUser($_credit_card_number, $_credit_card_cvv, $credit_card_data){
            $this->secret_user_data[] = $_credit_card_number;
            $this->secret_user_data[] = $_credit_card_cvv;
            $this->secret_user_data[] = $credit_card_data;
        }
        public function getSecretDataUser(){
            return $this->secret_user_data;
        }
    }
?>