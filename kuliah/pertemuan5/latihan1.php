<?php

// 1. Membuat array
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'May', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$mahasiswa = ['Aufa Ramadhan', 3.7, false];
// 2. Mencetak isi array
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];

echo "<hr>";

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);

echo "<hr>";
// 3. Manipulasi isi array
// Menambahkan isi array
// di akhir: [] atau array_push()

$hari[] = "Minggu";
var_dump($hari);
echo "<br>";
array_push($bulan, "Octopus", "Scorpio");
var_dump($bulan);
echo "<br>";

// di awall: array_unshift()

array_unshift($mahasiswa, "233040028");
var_dump($mahasiswa);
echo "<hr>";

// Menghapus isi array
// Di belakang: array_pop()
// Di depan: array_shift()

array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);
