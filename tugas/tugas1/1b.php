<?php

$npm = 28;

echo 'Aku adalah angka ' . '<b>' . $npm . '</b><br>' ;
printf ('Jika aku dikali 5, maka aku sekarang menjadi' . '<b> %.0f' . '</b><br>', $npm *= 5); 
printf ('Jika aku dibagi 2, maka aku sekarang menjadi' . '<b> %.1f' . '</b><br>', $npm /= 2 );
printf ('Jika aku ditambah 75, maka aku sekarang menjadi' . '<b> %.1f' . '</b><br>', $npm += 75);
printf ('Jika aku dikurang 20, maka aku sekarang menjadi' . '<b> %.1f' . '</b><br>', $npm -= 20);

?>