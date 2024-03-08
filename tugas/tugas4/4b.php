<?php

$hardwares = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b | Pemrograman Web</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($hardwares as $hardware) : ?>
            <li><?= $hardware ?></li>
        <?php endforeach ?>
    </ol>
    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php
        array_push($hardwares, "Card Reader", "Modem");
        sort($hardwares);
        foreach ($hardwares as $hardware) : ?>
            <li><?= $hardware ?></li>
        <?php endforeach ?>
    </ol>
</body>

</html>