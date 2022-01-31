<?php
    trait Mercati {
        
    public $exchange = ['Binace', 'Coinbase'];

    public function pushExchange($name_exchange){
        $this->exchange[] = $name_exchange;
    }

    }
?>