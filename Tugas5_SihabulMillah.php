<?php
//mendeklarasikan variabel
$nilaiA = 9;
$nilaiB = 3;

//mencetak variabel
echo "bilangan 1 = $nilaiA<br>";
echo "bilangan 2 = $nilaiB<br>";

echo "===========================";
echo "<br>";
//membuat fungsi dengan 2 parameter
function penjumlahan($a, $b)
{
    //melakukan operator aritmatika
    $hasil = $a + $b;

    //mengembalikan nilai berupa string dan hasil dari perhitungan
    return "hasil penjumlahan adalah : $hasil <br>";
};


function pengurangan($a, $b)
{
    $hasil = $a - $b;
    return "hasil pengurangan adalah : $hasil <br>";
};

function perkalian($a, $b)
{
    $hasil = $a * $b;
    return "hasil perkalian adalah : $hasil <br>";
};

function pembagian($a, $b)
{
    $hasil = $a / $b;
    return "hasil pembagian adalah : $hasil <br>";
};

//mencetak dan memanggil fungsi dengan namanya dan mengisi parameternya

echo penjumlahan($nilaiA, $nilaiB);
echo pengurangan($nilaiA, $nilaiB);
echo perkalian($nilaiA, $nilaiB);
echo pembagian($nilaiA, $nilaiB);
