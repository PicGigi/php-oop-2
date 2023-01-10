<?php

include __DIR__ .'/Registered.php.php';
class Item {
    public $price;
    public $animal;
    public $stazza;
    public $stock;

    public function setPrice($price) {
        $this->price =$price - (($price/100)*$sconto);
    }
}