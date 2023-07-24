<?php

include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Game.php';
include_once __DIR__ . '/models/Accessory.php';


$game1 = new Game('Topini di peluche Trixie', 1, 5, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Dog', 'Morbido con coda', '5cm x 3cm');
$food1 = new Food('Royal Canin Mini Adult', 5, 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Cat', 4, 'Prosciutto e Riso');
$accessory1 = new Accessory('Voliera Wilma in Legno', 40, 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Bird', 'Voliera per uccelli di medie dimensioni', 'Prodotto in legno');

$products = [$game1, $food1, $accessory1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($products as $product) ?>
    <ul>

    </ul>

</body>

</html>