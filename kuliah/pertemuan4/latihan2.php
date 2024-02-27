<?php

// $sisi_a = 9;
// $sisi_b = 4;

// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;
// echo "Total volume kubus A dan B adalah = $total";

function volumeKubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    return $total;
}

echo "Total volume kubus A dan B adalah = " . volumeKubus(9, 4);
echo "<br>";
echo "Total volume kubus C dan D adalah = " . volumeKubus(10, 15);
