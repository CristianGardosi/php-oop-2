<!-- Include classes that I'm going to use -->
<?php

include_once __DIR__ . '/classi/Food.php';
include_once __DIR__ . '/classi/Tech.php';

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
    <section>
        <!-- Istance food product -->
        <?php
            $food = new Food(
            'Riso Basmati', 
            'f', 
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
            echo $food->getCategory();
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
    </section>
    <section>
        <!-- Istance food product -->
        <?php
            $tech = new Tech(
            'Apple Macbook Pro M1', 
            't', 
            'Ti presentiamo il nuovo MacBook Air: il nostro portatile più sottile e leggero, completamente trasformato dal chip Apple M1. CPU fino a 3,5 volte più veloce. GPU fino a 5 volte più scattante. Il Neural Engine più evoluto di sempre, che assicura performance di machine learning fino a 9 volte migliori. Un’autonomia che su un MacBook Air non si era mai vista. E una tecnologia silenziosa, perché senza ventola. Ha una potenza senza precedenti, ed è pronto a seguirti ovunque.', 
            '1299.99', 
            'Apple Inc. Sylicon Valley CA (USA)', 
            'Un portatile potente e versatile in grado di offrire velocità e qualità grafica sopra la media. Un must have per programmatori grafici e content creator.');
            var_dump($tech);
        ?>
        <!-- Product name print -->
        <h2>
            Product name:
            <?php
            echo $tech->name;
            ?>
        </h2>
        <h3>
            Category:
            <?php
            echo $tech->getCategory();
            ?>
        </h3>
        <p>
            <?php
            echo $tech->description;
            ?>
        </p>
        <p>
            Distribuited by:
            <?php
            echo $tech->brand;
            ?>
        </p>
        <p>
            Our advices on this product:
            <?php
            echo $tech->usage_advices;
            ?>
        </p>
        <!-- Product price print + discount generator method -->
        <small>
            Dal prezzo originale di 
            <?php
                echo $tech->price;
            ?>
            Applichiamo uno sconto del 10%! Il nuovo prezzo è di:
            <?php
                echo $tech->calcoloSconto(10);
            ?>
        </small>
    </section>
</body>

</html>