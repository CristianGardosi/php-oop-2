<?php

class Product {
    // Properties / attributes
    public $name;
    public $category;
    public $description;
    public $price;

    // Constructor
    public function __construct($name, $category, $description, $price) {
        // Inizialized properties fot the istances
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;

    }

    // Methods
    public function calcoloSconto($perc) {
        $sconto = $this->price - ($this->price * $perc / 100);

        return number_format($sconto, 2) . '$';
    }
}

?>