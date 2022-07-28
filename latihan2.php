<?php
// Nama Sihab
// Operator Aritmatika

$nilai1 = 12;
$nilai2 = 6;

echo "Angka 1 = $nilai1 <br>";
echo "Angka 2 = $nilai2 <br>";

$tambah = $nilai1 + $nilai2;
$kurang = $nilai2 - $nilai1;
$bagi = $nilai1 / $nilai2;
$kali = $nilai1 * $nilai2;

echo "<br>";
echo "Hasil dari $nilai1 + $nilai2 = $tambah  <br>";
echo "Hasil dari $nilai2 - $nilai1 = $kurang  <br>";
echo "Hasil dari $nilai1 / $nilai2 = $bagi  <br>";
echo "Hasil dari $nilai1 * $nilai2 = $kali  <br>";

$nilai = "1";
switch ($nilai) {
    case 1:
        print "hai";
    case 2:
        print "hallo";
    default:
        print "bray";
}
