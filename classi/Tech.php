<?php

// Include originary parent class
include_once __DIR__ . '/Product.php';
// Extends originary class into the new one
class Tech extends Product {
    // Properties / attributes
    public $brand;
    public $usage_advices;

    // Constructor (originary propr + new)
    public function __construct($name, $category, $description, $price, $brand, $usage_advices) {
        // Properties from the originary class (product)
        parent::__construct($name, $category, $description, $price);
        // New properties inizialization
        $this->brand = $brand;
        $this->usage_advices = $usage_advices;
    }

}

?>