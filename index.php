<?php

include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Game.php';
include_once __DIR__ . '/models/Accessory.php';


$game1 = new Game('Topini di peluche Trixie', 1, 5, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Dog', 'Morbido con coda', '5cm x 3cm');

var_dump($game1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>