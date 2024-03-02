<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";

function luasLingkaran($r)
{

    $luas = 3.14 * $r * $r;

    echo "Jari-Jari = $r cm <br>";
    echo "Luas Lingkaran = $luas cm<sup>2</sup>";

    return $luas;
};

luasLingkaran(25);

echo "<hr>";
echo "<h4>Menghitung Keliling Lingkaran</h4>";

function kelilingLingkaran($r)
{

    $keliling = 2 * 3.14 * $r;

    echo "Jari-Jari = $r cm <br>";
    echo "Luas Lingkaran = $keliling cm<sup>2</sup>";

    return $keliling;
}

kelilingLingkaran(60);
echo "<hr>";
