<?php 
require_once __DIR__ . '/Mercati.php';
class Cryptocurrency {
    use Mercati;
    public $name;
    public $value;
    public $market_cap;
    public function __construct($_name, $_value, $_market_cap){
        $this->name = $_name;
        $this->value = $_value;
        $this->market_cap = $_market_cap;
    }
}

?>