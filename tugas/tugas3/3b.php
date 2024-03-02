<?php

function urutanAngka($angka)
{
    $urutan_angka = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo  "$urutan_angka ";
            $urutan_angka++;
        }
        echo "<br>";
    }
    return;
}

echo urutanAngka(5);
