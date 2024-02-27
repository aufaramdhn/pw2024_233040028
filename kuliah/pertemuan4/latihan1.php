<?php

echo date("l, j F Y");
echo "<br>";
echo time();
echo "<br>";
echo time() + 86400;
echo "<br>";
echo date('l', time() + 86400);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0, 0, 0, 11, 8, 2004));
