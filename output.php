<!-- Include classes that I'm going to use -->
<?php

include_once __DIR__ . '/classi/Food.php'

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product output</title>
</head>

<body>
    <header>
        <h1>
            Products page show
        </h1>
    </header>
    <main>
        <!-- Istance food product -->
        <?php
            $food = new Food(
            'Riso Basmati', 
            'Food', 
            'Il suo nome in hindi significa "Regina di fragranza", "Ricco di aroma innato" e deriva dal sanscrito vasaymayup (vasay: aroma; mayup: intriso). Successivamente divenne vasumati nelle lingue pracrite, e infine basmati che conosciamo oggi.', 
            '12.99', 
            'India', 
            'Pollo e gamberi al curry con riso basmati, Riso alla cantonese, Pollo yassa');
            var_dump($food);
        ?>
        <!-- Product name print -->
        <h2>
            Product name:
            <?php
            echo $food->name;
            ?>
        </h2>
        <h3>
            Category:
            <?php
            echo $food->category;
            ?>
        </h3>
        <p>
            <?php
            echo $food->description;
            ?>
        </p>
        <p>
            A speciality from:
            <?php
            echo $food->food_country;
            ?>
        </p>
        <p>
            Our costumers favourite recipes with this product:
            <?php
            echo $food->food_recipes;
            ?>
        </p>
        <!-- Product price print + discount generator method -->
        <small>
            Dal prezzo originale di 
            <?php
                echo $food->price;
            ?>
            Applichiamo uno sconto del 20%! Il nuovo prezzo è di:
            <?php
                echo $food->calcoloSconto(20);
            ?>
        </small>
    </main>
</body>

</html>