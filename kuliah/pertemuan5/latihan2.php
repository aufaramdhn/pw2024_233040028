<?php

$binatang = ["😺", "🐕", "🐍", "🦓", "🐰", "🐸"];
$makanan = ["Mie Ayam", "Ayam Goreng", "Orek Tempe", "Ayam Bakar", "Nasi Goreng"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
    <h1>Use For</h1>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php
        for ($i = 0; $i < count($binatang); $i++) : ?>
            <li><?= $binatang[$i] ?></li>
        <?php endfor ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php
        for ($i = 0; $i < count($makanan); $i++) : ?>
            <li><?= $makanan[$i] ?></li>
        <?php endfor ?>
    </ul>

    <hr>

    <h1>Use Foreach</h1>
    <h3>Daftar Binatang</h3>
    <ol>

        <?php foreach ($binatang as $b) : ?>

            <li><?= $b ?></li>

        <?php endforeach ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>

        <?php foreach ($makanan as $m) : ?>

            <li><?= $m ?></li>

        <?php endforeach ?>
    </ul>
</body>

</html>