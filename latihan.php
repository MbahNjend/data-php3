<?php
  $page = $_SERVER['PHP_SELF'];
  $sec = "2";
  header("Refresh: $sec; url=$page");
  echo "<br>";
?>

<?php
$a = 26;
$b = 2;

// penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

// pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

?>

<?php

$nilai = 50;

//penjumlahan dan penugasan
$nilai += 30;
echo $nilai;
echo "<br>";

// pengurangan dan penugasan 
$nilai -= 10;
echo $nilai;
echo "<br>";

// perkalian dan penugasan
$nilai *= 2;
echo $nilai;
echo "<hr>";

?>

<?php

$absen = 26;

$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;
$absen++;

echo $absen;
echo "<hr>";
?>

<?php

$noabsen = 26;

$noabsen--;
echo $noabsen;
echo "<hr>";

?>

<?php
$a = 26;
$b = 2;

// menggunakan relasi lebih besar

echo "$a > $b : lebih besar";
echo "<br>";

// menggunakan relasi lebih kecil

$c = 5;
$d = 15;

echo "$c < $d : lebih kecil";
echo "<br>";

// menggunakan sama dengan
$e = 20;
$f = 20;

echo "$e == $f : sama dengan";
echo "<br>";

// menggunakan lebih besar sama dengan
$g = 30;
$h = 30;

echo "$g >= $h : lebih besar sama dengan";
echo "<br>";

// menggunakan lebih kecil sama dengan
$i = 40;
$j = 40;

echo "$i <= $j : lebih kecil sama dengan";
echo "<br>";