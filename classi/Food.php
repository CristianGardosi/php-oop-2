<?php

// Include originary parent class
include_once __DIR__ . '/Product.php';
// Extends originary class into the new one
class Food extends Product {
    // Properties / attributes
    public $food_country;
    public $food_recipes;

    // Constructor
    public function __construct($name, $category, $description, $price, $food_country, $food_recipes) {
        // Properties from the originary class (product)
        parent::__construct($name, $category, $description, $price);
        // New properties inizialization
        $this->food_country = $food_country;
        $this->food_recipes = $food_recipes;
    }

}

?>