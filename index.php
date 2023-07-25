<?php

include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Game.php';
include_once __DIR__ . '/models/Accessory.php';
include_once __DIR__ . '/models/Categories.php';


$game1 = new Game('Topini di peluche Trixie', 1, 5, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $categories['dog'], 'Morbido con coda', '5cm x 3cm');
$food1 = new Food('Royal Canin Mini Adult', 5, 10, 'https://www.damoreno.ch/media/catalog/product/cache/5b5d7988e9af9f38308c6dd6deb78357/8/4/8410650216409_ckmijf8hzwpuycd0.jpg', $categories['cat'], 4, 'Prosciutto e Riso');
$accessory1 = new Accessory('Voliera Wilma in Legno', 40, 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $categories['bird'], 'Voliera per uccelli di medie dimensioni', 'Prodotto in legno');

$products = [$game1, $food1, $accessory1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            max-width: 250px;
            height: auto;
            margin-top: 20px;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <?php foreach ($products as $product) : ?>
        <ul>
            <li>
                <img src="<?= $product->GetImg() ?>" alt="<?= $product->getTitle() ?>">
            </li>
            <li>
                <?= $product->getTitle()  ?>
            </li>
            <li>
                Tipo di animale: <?= $product->getCategory()->getName()  ?>
            </li>
            <li>
                Peso: <?= $product->getWeight()  ?>kg
            </li>
        </ul>
    <?php endforeach ?>

</body>

</html>